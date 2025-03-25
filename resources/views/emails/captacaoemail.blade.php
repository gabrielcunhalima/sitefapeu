<!DOCTYPE html>
<html>

<head>
    <title>Nova Mensagem do Site - Captação</title>
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
            color: rgb(0, 92, 31);
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
        <h1>Contato Site - Mensagem da Área de Captação</h1>

        <div class="details">
            <p><strong>Nome:</strong> {{ $nome }}</p>
            <p><strong>E-mail:</strong> {{ $Email }}</p>
            <p><strong>Órgão de Origem:</strong> {{ $OrgaoDeOrigem }}</p>
            <p><strong>Função que Ocupa:</strong> {{ $FuncaoQueOcupa }}</p>
            <p><strong>CPF:</strong> {{ $CPF }}</p>
            <p><strong>Centro Acadêmico:</strong> {{ $CentroAcademico }}</p>
            <p><strong>Departamento/Laboratório:</strong> {{ $DepartamentoLaboratorio }}</p>
            <p><strong>Telefone:</strong> {{ $Telefone }}</p>
            <p><strong>Área de Interesse:</strong> {{ $AreaInteresse }}</p>
        </div>

        <div class="footer">
            <p>Esta mensagem foi enviada automaticamente através da área de Captação site da FAPEU.</p>
        </div>
    </div>
</body>

</html>
