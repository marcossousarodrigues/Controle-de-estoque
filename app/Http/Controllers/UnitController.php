<?php

namespace App\Http\Controllers;

use App\Models\Unit;
use Illuminate\Http\Request;

class UnitController extends Controller
{
    public function page()
    {
        return view('pages.unit.create', ['title' => 'Cadastro de unidade de Medida']);
    }

    public function create(Request $request)
    {
        $request->validate(
            [
                'name' => 'required',
                'unit' => 'required',
                'description' => 'required',
            ],
            [
                'name.required' => 'O campo nome é obrigatorio',
                'unit.required' => 'O campo unidade é obrigatorio',
                'description.required' => 'O campo descrição é obrigatorio',
            ]
        );

        Unit::create($request->all());

        return redirect()->route('pages.category.create');

    }

}
