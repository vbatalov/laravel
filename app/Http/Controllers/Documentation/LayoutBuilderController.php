<?php

namespace App\Http\Controllers\Documentation;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LayoutBuilderController extends Controller
{
    public function store(Request $request)
    {
        $config = $request->get('layout-builder');
        setting(['layout'=> $config])->save();
    }
}
