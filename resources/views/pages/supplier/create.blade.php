

@extends('layouts.template')

@section('title', $title)

@section('content')
    <section class="container">
        <h1>Cadatro de Fornecedor</h1>

        <section class="form">
            <form action="" method="post">
                <div class="label-input">
                    <label for="Produto">Nome</label>
                    <input type="text">
                </div>
                <div class="label-input">
                    <label for="Descrição">Razão Social</label>
                    <input type="text">
                </div>

                <div class="label-input">
                    <label for="Descrição">CEP</label>
                    <input type="text">
                </div>

                <div class="label-input">
                    <label for="Descrição">Razão Social</label>
                    <input type="text">
                </div>
                <div class="label-input">
                    <label for="Descrição">Endereço</label>
                    <input type="text">
                </div>
                <div class="label-input">
                    <label for="Descrição">Cidade</label>
                    <input type="text">
                </div>

                <div class="label-input">
                    <label for="Descrição">Estado</label>
                    <input type="text">
                </div>
        
                <div class="btn">
                    <button>Cadastrar</button>
                </div>
            </form>
        </section>

    </section>
@endsection

