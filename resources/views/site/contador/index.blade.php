<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contador</title>
</head>
<body>
    <h1>Contador: {{ $contador->contador }}</h1>
    <form action="/contador/incrementar" method="POST">
        @csrf
        <button type="submit">Incrementar</button>
    </form>

    <h2>Links Acessados</h2>
    <ul>
        @foreach ($links as $link)
            <li>
                <a href="/acessar-link/{{ urlencode(http://localhost:8080/sitefapeu/public/contact) }}"> http://localhost:8080/sitefapeu/public/contact </a> - {{ $link->clicks }} cliques
            </li>
        @endforeach
    </ul>
</body>
</html>
