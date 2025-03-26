<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Sistema de Servidores')</title>
    <style>
        body { font-family: Arial, sans-serif; padding: 20px; }
        nav { margin-bottom: 20px; }
    </style>
</head>
<body>

    <nav>
        <a href="{{ route('servidores.index') }}">Home</a> | 
        <a href="{{ route('servidores.create') }}">Novo Servidor</a>
    </nav>

    <div>
        @yield('content')
    </div>

</body>
</html>
