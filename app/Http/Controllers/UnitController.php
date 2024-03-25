<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function create()
    {
        return view('pages.unit.create');
    }
}
