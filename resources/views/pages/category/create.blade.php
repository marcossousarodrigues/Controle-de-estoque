

@extends('layouts.template')

@section('title', 'Cadastro de Categoria do Produto')
@section('content')

    <section class="container">
        <h1>Cadastro de Categoria do Produto</h1>

        <section class="form">
            <form action="{{ route('pages.category.create') }}" method="post">
                @csrf
                <div class="label-input">
                    <label for="name">Nome Categoria</label>
                    <input type="text" name="name">
                </div>
                <div class="label-input">
                    <label for="description">Descrição</label>
                    <input type="text" name="description">
                </div>
        
                <div class="btn">
                    <button>Cadastrar</button>
                </div>
            </form>
        </section>
    </section>
@endsection

