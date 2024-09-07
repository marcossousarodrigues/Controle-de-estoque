
@extends('layouts.template')

@section('title', $title)
@section('content')
    <section class="container">
        <h1>Cadastro de Produtos</h1>
        <section class="form">

            <form action="{{ route('pages.product.create')}} " method="post">
                @csrf
                <div class="label-input">
                    <label for="name">Produto</label>
                    <input type="text" name="name" value="{{old('name')}}">
                    @if ($errors->has('name'))
                        <span>{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="label-input">
                    <label for="description">Descrição</label>
                    <input type="text" name="description" value="{{old('description')}}">
                    @if ($errors->has('description'))
                        <span>{{ $errors->first('description') }}</span>
                    @endif
                </div>
                <div class="label-input">
                    <label for="peso">Peso</label>
                    <input type="text" name="weight" value="{{old('weight')}}">
                    @if ($errors->has('weight'))
                       <span>{{ $errors->first('weight') }}</span>
                    @endif
                </div>
                <div class="label-input">
                    <label for="amount">Quantidade</label>
                    <input type="text" name="amount" value="{{old('amount')}}">
                    @if ($errors->has('amount'))
                       <span>{{ $errors->first('amount') }}</span>
                    @endif
                </div>
                <div class="label-input">
                    <label for="preco">Preço</label>
                    <input type="text" name="price" value="{{old('price')}}">
                    @if ($errors->has('price'))
                       <span>{{ $errors->first('price') }}</span> 
                    @endif
                </div>
                <div class="label-input">
                    <label for="total">Total</label>
                    <input type="text" name="total" value="{{old('total')}}">
                    @if ($errors->has('total'))
                       <span>{{ $errors->first('total') }}</span>
                    @endif
                </div>
                <div class="label-input">
                    <label for="Categoria">Categoria</label>
                    <select name="category_id" id="">
                        @foreach ($categories as $key => $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="label-input">
                    <label for="unit">Unidade de Media</label>
                    <select name="unit_id" id="">
                        @foreach ($units as $key => $unit)
                            <option value="{{$unit->id}}">{{$unit->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="label-input">
                    <label for="supplier">Fornecedor</label>
                    <select name="supplier_id" id="">
                        @foreach ($suppliers as $key => $supplier)
                            <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                        @endforeach
                    </select>
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
                    <th>Código</th>
                    <th>Nome</th>
                    <th>Descrição</th>
                    <th>Peso</th>
                    <th>Quantidade</th>
                    <th>Preço</th>
                    <th>Total</th>
                    <th>Categoria</th>
                    <th>Unidade</th>
                    <th>Fornecedor</th>
                </tbody>
            
                @foreach ($products as $key => $product)
                    <tr>
                        <td class="{{$key % 2 == 0 ? '' : 'td-outher-color'}}" >{{$product->id}}</td>
                        <td class="{{$key % 2 == 0 ? '' : 'td-outher-color'}}" >{{$product->name}}</td>
                        <td class="{{$key % 2 == 0 ? '' : 'td-outher-color'}}" >{{$product->description}}</td>
                        <td class="{{$key % 2 == 0 ? '' : 'td-outher-color'}}" >{{$product->weight}}</td>
                        <td class="{{$key % 2 == 0 ? '' : 'td-outher-color'}}" >{{$product->amount}}</td>
                        <td class="{{$key % 2 == 0 ? '' : 'td-outher-color'}}" >{{$product->preco}}</td>
                        <td class="{{$key % 2 == 0 ? '' : 'td-outher-color'}}" >{{$product->total}}</td>
                        <td class="{{$key % 2 == 0 ? '' : 'td-outher-color'}}" >{{$product->category_id}}</td>
                        <td class="{{$key % 2 == 0 ? '' : 'td-outher-color'}}" >{{$product->unit_id}}</td>
                        <td class="{{$key % 2 == 0 ? '' : 'td-outher-color'}}" >{{$product->supplier_id}}</td>
                    </tr>
                @endforeach

            </table>

        </section>

    </section>
@endsection

