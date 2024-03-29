<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function page(Request $request)
    {
        return view('pages.product.create', ['title' => 'Cadastro de Produtos']);
    }


    public function create(Request $request)
    {
        $product = new Product();
        $product->name = $request->input('name');
        $product->description = $request->input('description');
        $product->weight = $request->input('weight');
        $product->amount = $request->input('amount');
        $product->price = $request->input('price');
        $product->total = $request->input('total');
        $product->category_id = $request->input('category_id');
        $product->unit_id = $request->input('unit_id');
        $product->supplier_id = $request->input('supplier_id');

        $product->save();
        
        return view('pages.product.create', ['title' => 'Cadastro de Produtos']);
    }
}
