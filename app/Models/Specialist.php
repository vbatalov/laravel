<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use DateTime;

class Specialist extends Model
{
    use HasFactory;

    /**
     * @return array|null
     * @throws \Exception
     */

    public function specialistsList () {
        $db = DB::table('specialists')->get();
        $specialists = [];

        foreach ($db as $value) {
            // Если Специалист не активен, то не выводим.
            if ($value->active  == 0) {
                continue;
            }
            /**
             * Опыт (год, месяц или день)
             */
            $exp = $this->experiance($value->start_exp);

            /**
             * Работа с ПРЕ текстом (ограничваю количество символов)
             */

            $pre_text = mb_strimwidth($value->pre_text, 0, 120, " ...");

            /**
             * Type = 0 > Удаленная работа
             * Type = 0 > Работа в офисе
             */
            if ($value->type == 0) {
                $type = "Работаю удаленно";
            } elseif ($value->type == 1) {
                $type = "Только офисная работа";
            } elseif ($value->type == 2) {
                $type = "В офисе и удаленно";
            }

            /**
             * Рейтинг
             */
            $rating = $value->rating;

            /**
             * Возврат каждого специалиста в массив $specialists
             */
            $specialists[$value->id] = [
                'name' => $value->name,
                'img' => $value->img,
                'type' => $type,
                'exp' => $exp,
                'pre-text' => $pre_text,
                'full-text'=> $value->full_text,
                'verifed' => $value->verifed,
                'rating' => $rating,
            ];
        }
        return $specialists ?? null;
    }

    /**
     * @param $date
     * @return string
     * @throws \Exception
     */
    public function experiance($date) {
        $dateDiff = date_diff(new DateTime(), new DateTime($date))->days;

        if ($dateDiff > 365) {
            /**
             * Если годы
             */

            $number = round($dateDiff / 365);
            if ($number == 1) {
                $text = "год";
            } elseif ($number >= 2 and $number <= 4) {
                $text = "года";
            } elseif ($number >= 5 and $number <= 20) {
                $text = "лет";
            }  else {
                $number = "";
                $text = "более 20 лет";
            }
            $exp = "$number $text";
        } elseif ($dateDiff < 365 and $dateDiff > 30) {
            /**
             * Если месяцы
             */
            $number = round($dateDiff / 30);

            if ($number == 1) {
                $text = "месяц";
            } elseif ($number >= 2 and $number <= 4) {
                $text = "месяца";
            } elseif ($number >= 5 and $number <= 12) {
                $text = "месяцев";
            }
            $exp = ("$number $text");
        } elseif ($dateDiff < 30) {
            /**
             * Если дни
             */
            $exp = ("Менее месяца");
        }

        return $exp;
    }

    public function rating($rating) {
        $countChecked = round($rating);
        $countUnChecked = 5 - $countChecked;

        for ($i = 1; $i < $countChecked; $i++) {
            $rating = "
            <div class='rating-label checked'>
                        <!--begin::Svg Icon | path: icons/duotune/general/gen029.svg-->
                        <span class='svg-icon svg-icon-1'>
                                                                            <svg width='24' height='24' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg'>
                                                                                <path d='M11.1359 4.48359C11.5216 3.82132 12.4784 3.82132 12.8641 4.48359L15.011 8.16962C15.1523 8.41222 15.3891 8.58425 15.6635 8.64367L19.8326 9.54646C20.5816 9.70867 20.8773 10.6186 20.3666 11.1901L17.5244 14.371C17.3374 14.5803 17.2469 14.8587 17.2752 15.138L17.7049 19.382C17.7821 20.1445 17.0081 20.7069 16.3067 20.3978L12.4032 18.6777C12.1463 18.5645 11.8537 18.5645 11.5968 18.6777L7.69326 20.3978C6.99192 20.7069 6.21789 20.1445 6.2951 19.382L6.7248 15.138C6.75308 14.8587 6.66264 14.5803 6.47558 14.371L3.63339 11.1901C3.12273 10.6186 3.41838 9.70867 4.16744 9.54646L8.3365 8.64367C8.61089 8.58425 8.84767 8.41222 8.98897 8.16962L11.1359 4.48359Z' fill='currentColor'></path>
                                                                            </svg>
                                                                        </span>
                        <!--end::Svg Icon-->
                    </div>
            ";
        }

        return $rating;
    }
}
