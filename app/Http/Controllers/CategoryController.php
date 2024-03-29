<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function page(Request $request)
    {
        return view('pages.category.create');
    }

    public function create(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'description' => 'required'
        ]);

        // Category::create($request->all());

    }

}
