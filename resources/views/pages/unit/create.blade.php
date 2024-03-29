

@extends('layouts.template')

@section('title', $title)
@section('content')
    <section class="container">
        <h1>Cadatro de Unidade de Medida</h1>

        <section class="form">
            <form action="" method="post">
                <div class="label-input">
                    <label for="Produto">Nome da Unidade</label>
                    <input type="text">
                </div>
                <div class="label-input">
                    <label for="Descrição">Descrição</label>
                    <input type="text">
                </div>

                <div class="label-input">
                    <label for="Descrição">Tipo de Unidade</label>
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
