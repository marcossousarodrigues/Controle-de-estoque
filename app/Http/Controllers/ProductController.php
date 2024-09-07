<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Unit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function page(Request $request)
    {
        $category = Category::all();        
        $unit = Unit::all();        
        $supplier = Supplier::all();           
        $products = Product::all();           

        return view('pages.product.create', 
            [
                'title' => 'Cadastro de Produtos',
                'categories' => $category,
                'units' => $unit,
                'suppliers' => $supplier,
                'products' => $products,
            ] 
        );
    }


    public function create(Request $request)
    {   

    
        $request->validate(
            [
                'name' => 'required',
                'description' => 'required',
                'weight' => 'required',
                'amount' => 'required',
                'price' => 'required',
                'total' => 'required'
            ],
            [
                'required' => 'O campo nome é obrigatorio',
                'description.required' => 'O campo descrição é obrigatorio',
                'weight.required' => 'O campo peso é obrigatorio',
                'amount.required' => 'O campo quantidade é obrigatorio',
                'price.required' => 'O campo preço é obrigatorio',
                'total.required' => 'O campo preço é obrigatorio',
            ]
        );

        Product::create($request->all());

        return redirect()->route('pages.product.page');
    }
}
