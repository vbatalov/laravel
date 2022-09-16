<?php

namespace App\Http\Controllers;

use App\DataTables\CompaniesDataTable;
use App\Models\Companies;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CompaniesController extends Controller
{

    protected $fillable = [
        'name',
        'type',
        'management_name',
        'management_post',
        'inn',
    ];


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    /**
     * Список компаний
     */
    public function index(CompaniesDataTable $dataTable)
    {
        return $dataTable->render('pages.companies.index');
    }

    /**
     * ИНН получаю из Route::get
     */
    public function show($inn) {
        // Привлекаю Model Companies
        $model = new Companies();
        $info = $model->fullInfo($inn); // Делаю запрос к Модели функция fullInfo($inn)

        $type = 0 ? "Индивидуальный предприниматель" : "Юридическое лицо";

        /**
         * Возвращаю для view все параметры
         */
        return view('pages.companies.info.index', [
            'inn' => $info['inn'],
            'name' => $info['name'],
            'type' => $type,
            'management_name' => $info['management_name'],
            'management_post' => $info['management_post'],
            'ogrn' => $info['ogrn'],
            'okpo' => $info['okpo'],
            'okato' => $info['okato'],
            'oktmo' => $info['oktmo'],
            'okogu' => $info['okogu'],
            'address' => $info['address'],
        ]);
    }

    public function getNameAttribute() {

    }

    public function  info() {

    }
}
