<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Ramsey\Uuid\Type\Integer;

class Companies extends Model
{
    use HasFactory;

    /**
     * @param $inn
     * @return array|string
     * русская компания - подробная информация
     */
    public function ruInfoCompanie($inn) {
        $companies =  DB::select("select json from companies_ru_egr where inn = '$inn'");

        /**
         * Если данных в БД нет. Нужно их добавить
         * Функция ещё не реализована
         */
        if (empty($companies)) {
            return null;
        } else {
            /**
             * object преобразую в json -> затем декодирую в Массив
             */
            $json = ($companies[0]->json);
            $json = json_decode($json, true);

            /**
             * Далее нужно разбирать массив и отдавать переменные
             * Буду отделать ФизЛицо и ЮР Лицо
             */

            /**
             * Юридическое лицо
             */
            if (!empty($json['СвЮЛ'])) {

                /**
                 * Загружаю атрибуты
                 * return array
                 */

                $data = $json['СвЮЛ'];

                /**
                 * Отдельные данные завожу в массив
                 */
                $attributes = $data['@attributes'] ?? null; // ИНН, ОГРН, и т.д.
                $okved = $data['СвОКВЭД'] ?? null; // ОКВЭД
                $information = $data['СвНаимЮЛ'] ?? null; // Наименование юр. лица
                $create_at = $data['СвОбрЮЛ'] ?? null; // Сведения образования юр. лица
                $address = $data['СвАдресЮЛ']['АдресРФ'];

                /**
                 * Руководители
                 */
                $role = $data['СведДолжнФЛ']; //return array ФИО, дата, должность

                /**
                 * Записи изменения юр. лица
                 * return array
                 */
                $changes = $this->changesEgrul($data['СвЗапЕГРЮЛ']) ?? null;

                /**
                 * Финансы компании, если есть
                 * Алгоритм написан в функции $this->ruFinCompanie
                 * return array $fin
                 * [year [ text : data ]]
                 */

                $fin = $this->ruFinCompanie($json);

                /**
                 * Получаю данные из массива @attributes
                 * Каждое свойство записываю в отдельную переменную
                 * return array
                 */

                /**
                 * Возврат вo view
                 */
                return [
                    /**
                     * Возврат массива @attributes
                     */

                    'inn' => $attributes['ИНН'] ?? null, // ИНН
                    'kpp' => $attributes['КПП'] ?? null, // КПП
                    'ogrn' => $attributes['ОГРН'] ?? null, // ОГРН
                    'dateExtract' => $attributes['ДатаВып'] ?? null, //Дата выписки
                    'dateOgrn' => $attributes['ДатаОГРН'] ?? null, //Дата присвоения ОГРН
                    'kodopf' => $attributes['КодОПФ'] ?? null, // Код ОПФ
                    'fullNameOpf' => $attributes['ПолнНаимОПФ'] ?? null, // Полное наименование ОПФ

                    /**
                     * Руководитель, должность
                     */
                    'ceo_surname' => $role['СвФЛ']['@attributes']['Фамилия'] ?? null, // Фамилия
                    'ceo_name' => $role['СвФЛ']['@attributes']['Имя'] ?? null, // Имя
                    'ceo_patronymic' => $role['СвФЛ']['@attributes']['Отчество'] ?? null, // Отчество
                    'ceo_inn' => $role['СвФЛ']['@attributes']['ИННФЛ'] ?? null, // ИНН Физ. лиц.
                    'ceo_date' => $role['СвФЛ']['ГРНДата']['@attributes']['ДатаЗаписи'] ?? null, // ИНН Физ. лиц.

                    'ceo_role_type' => $role['СвДолжн']['@attributes']['НаимВидДолжн'] ?? null, // Вид должности
                    'ceo_role_name' => $role['СвДолжн']['@attributes']['НаимДолжн'] ?? null, // Наименование должности


                    /**
                     * Возврат массива @okved
                     * Информация об ОКВЭД
                     * Массив в массиве
                     */
                    'okved_dop' => $okved['СвОКВЭДДоп'] ?? null,
                    'okved_main' => $okved['СвОКВЭДОсн'] ?? null,

                    /**
                     * Сведения о наименовании
                     */
                    'fullname' => $information['@attributes']['НаимЮЛПолн'] ?? null,
                    'shortname' => $information['СвНаимЮЛСокр']['@attributes']['НаимСокр'] ?? null,

                    /**
                     * Сведения образования юр. лица
                     */
                    'create_data' => $create_at['@attributes']['ДатаОГРН'] ?? null,

                    /** Возврат финансов */
                    'fin' => $fin ?? null,

                    /**
                     * Адрес юр. лица
                     */
                    'home_number' => $address['@attributes']['Дом'] ?? null, // Номер дома
                    'app_number' => $address['@attributes']['Кварт'] ?? null, // Номер Квартиры
                    'index' => $address['@attributes']['Индекс'] ?? null, // Индекс

                    'region_type'=> $address['Регион']['@attributes']['ТипРегион'] ?? null, // Тип регион
                    'region_name' => $address['Регион']['@attributes']['НаимРегион'] ?? null, // Наименование региона
                    'rayon_type' => $address['Район']['@attributes']['ТипРайон'] ?? null, // Тип район
                    'rayon_name' => $address['Район']['@attributes']['НаимРайон'] ?? null, // Тип район

                    'city_type' => $address['Город']['@attributes']['ТипГород'] ?? null, // Тип город
                    'city_name' => $address['Город']['@attributes']['НаимГород'] ?? null, // Тип город

                    'type_nasel_punkt' => $address['НаселПункт']['@attributes']['ТипНаселПункт'] ?? null, // Тип нас. пункт
                    'name_nasel_punkt' => $address['НаселПункт']['@attributes']['НаимНаселПункт'] ?? null, // Имя нас. пункт
                    'street_type' => $address['Улица']['@attributes']['ТипУлица'] ?? null, // Улица тип
                    'street_name' => $address['Улица']['@attributes']['НаимУлица'] ?? null, // Улица тип

                    /**
                     * Сведения о внесении изменений в ЕГРЮЛ
                     */
                    'changes' => $changes ?? null, // Сведения записи ЕГРЮЛ 'СвЗапЕГРЮЛ'

                ];
            }
            /**
             * Физическое лицо / ИП
             */
            if (!empty($json['СвИП'])) {

            }
        }

    }

    /**
     * Расшифровка финансов компании
     * @param $json
     * @return array|null
     */

    public function ruFinCompanie ($json) {

        if (array_key_exists('fin', $json)) {
            $data = $json['fin'];
            $fin = [];

            /**
             * Разбираю отчетность в периодах
             * Ищу массив с началом строки 'Y' чтобы по нему работать по годам
             * y2018, y2019, y2020 и т.д.
             */
            foreach ($data as $key => $value) {
                if (mb_substr($key, 0, 1) == 'y') {
                    $year = str_replace('y', '', $key);
                    $array = $value['@attributes'];

                    /**
                     * Доходы и расходы
                     */
                    $income = $this->cutSum($array['income']); // доход
                    $outcome = $this->cutSum($array['outcome']); // расход
                    $profit = $this->cutSum($array['income'] - $array['outcome']);

                    /**
                     * Налоги
                     */
                    $usn = $array['tax_id_1'] ?? null; // УСН
                    $social = $array['tax_id_2'] ?? null; // Соц. страхование
                    $oms = $array['tax_id_3'] ?? null; // ОМС взносы
                    $pfr = $array['tax_id_5'] ?? null; // ПФР

                    $sum = ($usn+$social+$oms+$pfr) ?? null;
                    $sum = $this->cutSum($sum);

                    $fin[$year] = [
                        'income' => $income,
                        'outcome' => $outcome,
                        'usn' => $usn,
                        'social' => $social,
                        'oms' => $oms,
                        'pfr' => $pfr,
                        'sum_tax' => $sum,
                        'profit'=> $profit,
                    ];
                }
            }
            return $fin;
        } else {
            return null;
        }
    }

    /**
     * Функция сокращает сумму доходов, расходов
     * Чтобы было легче читать цифру
     * @param $sum
     * @return string
     */
    public function cutSum ($sum) {
        if ($sum > 1000000) {
            $sum = $sum / 1000000;
            return (number_format($sum,  2, ',', ' ') . ' млн.');
        } elseif ($sum < 1000000) {
            $sum = $sum / 1000;
            return (number_format($sum,  2, ',', ' ') . ' тыс.');
        }

    }

    public function changesEgrul($json) {
        $changes = [];
        foreach ($json as $key => $value) {
            $date = $value['@attributes']['ДатаЗап'];
            $date = date("Y", strtotime($date));
            $nameChanges = $value['ВидЗап']['@attributes']['НаимВидЗап'];

            $changes[$key] = [
              'date' => $date,
              'nameChanges' => $nameChanges,
            ];
        }
        return $changes ?? null;
    }
}
