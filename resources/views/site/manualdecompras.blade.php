@extends ('site.master.layout')

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Outros links e estilos necessários -->
</head>
<body>
    <!-- Aqui vai o conteúdo das suas páginas -->
    @yield('content')

    <!-- Scripts, se necessário -->
</body>
</html>
