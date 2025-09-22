<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>

    <div class="main-container">

        <header class="header">
            <div class="content-header">
                <h2 class="title-logo"><a href="{{ route('dashboard') }}">Junior</a></h2>
                <nav class="nav-links">
                    <ul class="list-nav-link">
                        <li><a href="#"></a>Usuarios</li>
                        <li><a href="{{ route('dashboard') }}">Sair</a></li>
                    </ul>
                </nav>
            </div>
        </header>

        <form action="{{ route('user.store') }}" method="POST">
        
        @csrf {{-- Impede o lançamento de dados por aplicações externas  --}}

        <label for="name">Nome</label>
        <input type="text" name="name" id="name" class="border"><br><br>

        <label for="email">Email</label>
        <input type="text" name="email" id="email" class="border">

        <label for="password">Senha</label>
        <input type="password" name="password" id="password" class="border">

        <button type="submit">Cadastrar</button>

        @if (session('sucess'))
            <p>{{ session('sucess') }}s</p>
        @endif

        @if (session('error'))
            <p>{{session('error')}}</p>
        @endif
    </form>
    </div>

    <h1>Cadastrar Usuário</h1>  

    
</body>
</html>