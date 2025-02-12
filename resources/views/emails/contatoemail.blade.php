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
            color: #007bff;
        }
        .details {
            margin-top: 20px;
        }
        .details p {
            margin: 10px 0;
        }
        .footer {
            margin-top: 30px;
            font-size: 12px;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="email-container">
        <h1>Nova Mensagem de Contato</h1>

        <p><strong>Nome:</strong> {{ $nome }}</p>
        <p><strong>E-mail:</strong> {{ $email }}</p>
        <p><strong>Assunto:</strong> {{ $assunto }}</p>

        <div class="details">
            <p><strong>Mensagem:</strong></p>
            <p>{{ $mensagem }}</p>
        </div>

        <div class="footer">
            <p>Este é um e-mail gerado automaticamente. Por favor, não responda.</p>
        </div>
    </div>
</body>
</html>
