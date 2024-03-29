<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function page()
    {
        return view('pages.unit.create', ['title' => 'Cadastro de unidade de Medida']);
    }

    public function create()
    {
        
    }

}
