<?php

namespace App\Http\Controllers;

use App\DataTables\CompaniesDataTable;
use App\Models\Companies;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class CompaniesRuController extends Controller
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

    public function overview($inn) {
        $model = new Companies();
        $info = $model->ruInfoCompanie($inn);
        if (isset($info)) {
            return view('pages.companies.info.ru.index', $info);
        } else {
            return 'return null';
        }
    }
}
