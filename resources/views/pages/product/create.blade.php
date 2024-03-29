
@extends('layouts.template')

@section('title', $title)
@section('content')
    <section class="container">
        <h1>Cadastro de Produtos</h1>

        <section class="form">
            <form action="{{ route('pages.product.create')}} " method="post">
                @csrf
                <div class="label-input">
                    <label for="Produto">Produto</label>
                    <input type="text">
                </div>
                <div class="label-input">
                    <label for="Descrição">Descrição</label>
                    <input type="text">
                </div>
                <div class="label-input">
                    <label for="preco">Quantidade</label>
                    <input type="text">
                </div>
                <div class="label-input">
                    <label for="preco">Preço</label>
                    <input type="text">
                </div>
                <div class="label-input">
                    <label for="preco">Total</label>
                    <input type="text">
                </div>
                <div class="label-input">
                    <label for="Categoria">Categoria</label>
                    <input type="text">
                </div>
                <div class="label-input">
                    <label for="preco">Unidade de Media</label>
                    <input type="text">
                </div>
                <div class="label-input">
                    <label for="preco">Fornecedor</label>
                    <input type="text">
                </div>
                <div class="btn">
                    <button>Cadastrar</button>
                </div>
                
            </form>
        </section>
    </section>
@endsection

