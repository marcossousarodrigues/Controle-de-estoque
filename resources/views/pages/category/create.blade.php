

@extends('layouts.template')

@section('title', 'Cadastro de Categoria do Produto')
@section('content')

    <section class="container">
        <h1>Cadastro de Categoria do Produto</h1>

        <section class="form">
            <form action="" method="post">
                <div class="label-input">
                    <label for="Produto">Nome Categoria</label>
                    <input type="text">
                </div>
                <div class="label-input">
                    <label for="Descrição">Descrição</label>
                    <input type="text">
                </div>

                <div class="label-input">
                    <label for="Descrição">Data de Criação</label>
                    <input type="date">
                </div>
        
                <div class="btn">
                    <button>Cadastrar</button>
                </div>
            </form>
        </section>
    </section>
@endsection

