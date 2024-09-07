<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function page(Request $request)
    {
        $categories = Category::all();

        return view('pages.category.create', ['categories' => $categories]);
    }

    public function create(Request $request)
    {

        $request->validate(
            [
                'name' => 'required',
                'description' => 'required'
            ],
            [
                'name.required' => 'O campo nome é obrigatorio',
                'description.required' => 'O campo descrição é obrigatorio',
            ]
        );

        Category::create($request->all());

    }

}
