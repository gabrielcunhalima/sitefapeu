<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nova Mensagem de Contato</title>
    <style>
        :root {
            --primary-color: #06551a;
            --secondary-color: #30755C;
            --background-color: #f5f7fa;
            --text-color: #333333;
            --light-text: #6c757d;
            --border-color: #e9ecef;
            --shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-color);
            background-color: var(--background-color);
            padding: 20px;
            margin: 0;
            line-height: 1.6;
        }
        
        .email-container {
            max-width: 600px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 40px;
            border-radius: 12px;
            box-shadow: var(--shadow);
        }
        
        .header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .logo {
            max-width: 150px;
            margin-bottom: 20px;
        }
        
        h1 {
            color: var(--primary-color);
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 25px;
            border-bottom: 3px solid var(--secondary-color);
            padding-bottom: 10px;
        }
        
        .meta-info {
            background-color: rgba(6, 85, 26, 0.05);
            border-left: 4px solid var(--primary-color);
            padding: 15px;
            border-radius: 6px;
            margin-bottom: 25px;
        }
        
        .meta-info p {
            margin: 8px 0;
        }
        
        .details {
            background-color: #ffffff;
            border: 1px solid var(--border-color);
            border-radius: 8px;
            padding: 20px;
            margin-bottom: 30px;
        }
        
        .details h2 {
            font-size: 18px;
            margin-top: 0;
            color: var(--primary-color);
        }
        
        .details p {
            margin: 15px 0 0;
            color: var(--text-color);
            line-height: 1.7;
        }
        
        .footer {
            border-top: 1px solid var(--border-color);
            padding-top: 20px;
            margin-top: 30px;
            font-size: 14px;
            color: var(--light-text);
        }
        
        .contact-info {
            background-color: #fafafa;
            border-radius: 8px;
            padding: 15px;
            margin-top: 15px;
        }
        
        .contact-info p {
            margin: 5px 0;
        }
        
        .cta-button {
            text-align: center;
            margin: 30px auto;
        }
        
        .cta-button a {
            background-color:rgb(218, 218, 218);
            color: white;
            text-decoration: none;
            padding: 12px 24px;
            border-radius: 50px;
            font-weight: 500;
        }
        
        @media only screen and (max-width: 600px) {
            .email-container {
                padding: 25px;
            }
            
            h1 {
                font-size: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="email-container">
        <div class="header">
            <h1>Nova Mensagem de Contato</h1>
        </div>
        
        <div class="meta-info">
            <p><strong>Setor Contatado:</strong> {{ $setor }}</p>
            <p><strong>Assunto:</strong> {{ $assunto }}</p>
            <p><strong>Data:</strong> {{ date('d/m/Y H:i') }}</p>
        </div>
        
        <div class="details">
            <h2>Mensagem:</h2>
            <p>{{ $mensagem }}</p>
        </div>
        
        <div class="cta-button">
            <a href="mailto:{{ $email }}">Responder ao Remetente</a>
        </div>
        
        <div class="footer">
            <p>Esta mensagem foi enviada automaticamente pelo site da FAPEU.</p>
            
            <div class="contact-info">
                <p><strong>Informações do Remetente:</strong></p>
                <p><strong>Nome:</strong> {{ $nome }}</p>
                <p><strong>E-mail:</strong> {{ $email }}</p>
            </div>
        </div>
    </div>
</body>
</html>