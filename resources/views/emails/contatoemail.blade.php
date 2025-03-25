<!DOCTYPE html>
<html>

<head>
    <title>Nova Mensagem de Contato</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            background-color: #f9f9f9;
            padding: 20px;
        }

        .email-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h1 {
            color:rgb(0, 66, 22);
        }

        .details {
            margin-top: 20px;
        }

        .details p {
            margin: 10px 0;
        }

        .footer {
            margin-top: 50px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>

<body>
    <div class="email-container">
        <h1>Nova Mensagem de Contato - Site FAPEU</h1>
        <p><b>Contatou o setor:</b> {{ $setor }}</p>
        <p><strong>Assunto: </strong> {{ $assunto }}</p>

        <div class="details">
            <p><strong>Mensagem:</strong></p>
            <p>{{ $mensagem }}</p>
        </div>

        <div class="footer">
            <p>Informações de contato<br><br><strong>Nome:</strong> {{ $nome }}<br><strong>E-mail:</strong> {{ $email }}</p>
        </div>
    </div>
</body>

</html>