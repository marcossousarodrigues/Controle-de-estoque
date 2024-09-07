<?php

namespace App\Http\Controllers;

use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function page()
    {
        $suppliers = Supplier::all();

        return view('pages.supplier.create', ['title' => 'Cadastro de Fornecedores', 'suppliers'=> $suppliers]);
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'corporate_name' => 'required',
                'email' => 'email',
                'cep' => 'required',
                'address' => 'required',
                'city' => 'required',
                'state' => 'required'
            ],
            [
                'name.required' => 'O campo nome é obrigatorio',
                'corporate_name.required' => 'O campo razão social é obrigatorio',
                'email.email' => 'Por favor, informe um email valido',
                'cep.required' => 'O campo cep é obrigatorio',
                'address.required' => 'O campo endereço é obrigatorio',
                'city.required' => 'O campo cidade é obrigatorio',
                'state.required' => 'O campo estado é obrigatorio',
            ]
        );

        Supplier::create($request->all());
        
        return redirect('/supplier');
    }
}
