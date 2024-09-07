

@extends('layouts.template')

@section('title', $title)

@section('content')
    <section class="container">
        <h1>Cadatro de Fornecedor</h1>

        <section class="form">
            <form action="{{route('pages.supplier.create')}}" method="post">
                @csrf
                <div class="label-input">
                    <label for="Produto">Nome</label>
                    <input type="text" name="name">
                    @if ($errors->has('name'))
                        <span>{{ $errors->first('name') }}</span>
                    @endif
                </div>

                <div class="label-input">
                    <label for="corporate_name">Razão Social</label>
                    <input type="text" name="corporate_name">
                    @if ($errors->has('corporate_name'))
                        <span>{{ $errors->first('corporate_name') }}</span>
                    @endif
                </div>

                <div class="label-input">
                    <label for="Email">E-mail</label>
                    <input type="text" name="email">
                    @if ($errors->has('email'))
                        <span>{{ $errors->first('email') }}</span>
                    @endif
                </div>

                <div class="label-input">
                    <label for="cep">CEP</label>
                    <input type="text" name="cep">
                    @if ($errors->has('cep'))
                        <span>{{ $errors->first('cep') }}</span>
                    @endif
                </div>

                <div class="label-input">
                    <label for="Address">Endereço</label>
                    <input type="text" name="address">
                    @if ($errors->has('address'))
                        <span>{{ $errors->first('address') }}</span>
                    @endif
                </div>
                <div class="label-input">
                    <label for="city">Cidade</label>
                    <input type="text" name="city">
                    @if ($errors->has('city'))
                        <span>{{ $errors->first('city') }}</span>
                    @endif
                </div>
                <div class="label-input">
                    <label for="state">Estado</label>
                    <input type="text" name="state">
                    @if ($errors->has('state'))
                        <span>{{ $errors->first('state') }}</span>
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
                    <th>Nome</th>
                    <th>Razão Social</th>
                    <th>E-mail</th>
                    <th>Cep</th>
                    <th>Endereço</th>
                    <th>Cidade</th>
                    <th>Estado</th>
                </tbody>
            
                @foreach ($suppliers as $supplier)
                    <tr>
                        <td>{{$supplier->name}}</td>
                        <td>{{$supplier->corporate_name}}</td>
                        <td>{{$supplier->email}}</td>
                        <td>{{$supplier->cep}}</td>
                        <td>{{$supplier->address}}</td>
                        <td>{{$supplier->city}}</td>
                        <td>{{$supplier->state}}</td>
                    </tr>
                @endforeach

            </table>

        </section>

    </section>
@endsection

