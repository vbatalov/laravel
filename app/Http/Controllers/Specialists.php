<?php

namespace App\Http\Controllers;

use App\DataTables\CompaniesDataTable;
use Illuminate\Http\Request;
use App\Models\Specialist;
use Faker\Core\DateTime;

class Specialists extends Controller
{

    public function index()
    {
        $model = new Specialist();
        $info = $model->specialistsList();

        return view('pages.specialists.index', ['info' => $info]);
    }
}
