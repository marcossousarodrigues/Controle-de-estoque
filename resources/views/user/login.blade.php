
@extends('layouts.template')

@section('title', $title)
@section('content')
    <section class="container">
        <h1>Login</h1>
        <section class="form">
            <p class="message_error">{{ isset($error) && $error != '' ? $error : '' }}</p>
            <form id="form-login" action="{{ route('user.login')}} " method="post">
                @csrf
                <div class="label-input">
                    <label for="email">Usuário</label>
                    <input type="text" name="email" value="{{old('email')}}">
                    @if ($errors->has('email'))
                        <span>{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="label-input">
                    <label for="password">Senha</label>
                    <input type="password" name="password" value="{{old('password')}}">
                    @if ($errors->has('password'))
                        <span>{{ $errors->first('password') }}</span>
                    @endif
                </div>
            
                <div class="btn">
                    <button>Entrar</button>
                </div>
                
            </form>
        </section>
    </section>
@endsection

