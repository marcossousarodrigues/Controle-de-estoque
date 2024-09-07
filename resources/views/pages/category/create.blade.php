

@extends('layouts.template')

@section('title', 'Cadastro de Categoria do Produto')
@section('content')

    <section class="container">
        <h1>Categoria do Produto</h1>

        <section class="form">

            <form action="{{ route('pages.category.create') }}" method="post">
                @csrf
                <div class="label-input">
                    <label for="name">Nome Categoria</label>
                    <input value="{{ old('name') }}" type="text" name="name">
                    @if ($errors->has('name'))
                        <span>{{$errors->first('name')}}</span>
                    @endif
                </div>
                <div class="label-input">
                    <label for="description">Descrição</label>
                    <input value="{{ old('description') }}" type="text" name="description">
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

        <section class="section_table">
            <table>
                <tbody>
                    <th>Categoria</th>
                    <th>Descrição</th>
                </tbody>
            
                @foreach ($categories as $category)
                    <tr>
                        <td>{{$category->name}}</td>
                        <td>{{$category->description}}</td>
                    </tr>
                @endforeach

            </table>

        </section>

    </section>
@endsection

