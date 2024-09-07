<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link rel="stylesheet" href=" {{ asset('css/styles.css') }} ">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Share+Tech&display=swap" rel="stylesheet">
</head>
<body>

    @if ( isset($_SESSION['email']))
 
    <header>
        <nav>
            <a href="/">Controle de Estoque</a>
            <ul>
                <li>
                    <a href="{{route('pages.product.page')}}">Produto</a>
                </li>
                <li>
                    <a href="{{route('pages.category.page')}}">Categoria</a>
                </li>
                <li>
                    <a href="{{route('pages.unit.page')}}">Unidade de Medida</a>
                </li>
                <li>
                    <a href="{{route('pages.supplier.page')}}">Fornecedor</a>
                </li>
                <li>
                    <a href="{{route('user.logout')}}">Sair</a>
                </li>
            </ul>
        </nav>
    </header>
       
    @endif
    
    @yield('content')

    <footer>
        <p>Controle de estoque &copy; 2024 </p>
    </footer>
</body>
</html>