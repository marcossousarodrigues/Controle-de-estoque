

@extends('layouts.template')

@section('title', $title)
@section('content')
    <section class="container">
        <h1>Unidade de Medida</h1>

        <section class="form">
        
            <form action="{{route('pages.unit.create')}}" method="post">
                @csrf
                
                <div class="label-input">
                    <label for="Name">Nome da Unidade</label>
                    <input type="text" name="name">
                    @if ($errors->has('name'))
                        <span>{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="label-input">
                    <label for="Unit">Nome abreviado</label>
                    <input type="text" name="unit">
                    @if ($errors->has('unit'))
                        <span>{{$errors->first('unit')}}</span>
                    @endif
                </div>

                <div class="label-input">
                    <label for="Description">Descrição</label>
                    <input type="text" name="description">
                    @if ($errors->has('description'))
                        <span>{{$errors->first('description')}}</span>
                    @endif
                </div>

                <div class="label-input">
                    <label for="blocked">Bloqueado</label>
                    <select name="blocked" id="">
                        <option value="3"></option>
                        <option value="1">Sim</option>
                        <option value="2">Não</option>
                    </select>
                </div>
        
                <div class="btn">
                    <button>Cadastrar</button>
                </div>
            </form>
        </section>


    </section>
@endsection
