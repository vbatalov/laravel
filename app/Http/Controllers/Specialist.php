<?php

namespace App\Http\Controllers;

use App\DataTables\CompaniesDataTable;
use Illuminate\Http\Request;

class Specialist extends Controller
{
    public function index()
    {
        return view('pages.specialists.index');
    }
}
