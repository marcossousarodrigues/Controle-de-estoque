<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function page()
    {
        return view('pages.supplier.create', ['title' => 'Cadastro de Fornecedores']);
    }

    public function create()
    {
        return view('pages.supplier.create', ['title' => 'Cadastro de Fornecedores']);
    }
}
