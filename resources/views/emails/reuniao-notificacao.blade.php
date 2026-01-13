<!DOCTYPE html>
<html>
<head>
    <title>Nova Solicitação de Reunião</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background-color: #06551A;
            color: white;
            padding: 15px;
            text-align: center;
        }
        .content {
            padding: 20px;
            background-color: #f9f9f9;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Nova Solicitação de Reunião</h2>
        </div>
        <div class="content">
            <p>Uma nova solicitação de reunião foi recebida através do site da FAPEU:</p>
            
            <table>
                <tr>
                    <th>Nome:</th>
                    <td>{{ $reuniao->nome }}</td>
                </tr>
                <tr>
                    <th>E-mail:</th>
                    <td>{{ $reuniao->email }}</td>
                </tr>
                <tr>
                    <th>Telefone:</th>
                    <td>{{ $reuniao->telefone ?: 'Não informado' }}</td>
                </tr>
                <tr>
                    <th>Cargo/Instituição:</th>
                    <td>{{ $reuniao->cargo_instituicao }}</td>
                </tr>
                <tr>
                    <th>Assunto:</th>
                    <td>{{ $reuniao->assunto }}</td>
                </tr>
                <tr>
                    <th>Descrição:</th>
                    <td>{{ $reuniao->descricao }}</td>
                </tr>
                <tr>
                    <th>Data Preferencial:</th>
                    <td>{{ \Carbon\Carbon::parse($reuniao->data_reuniao)->format('d/m/Y') }}</td>
                </tr>
                <tr>
                    <th>Horário Preferencial:</th>
                    <td>{{ $reuniao->horario_reuniao }}</td>
                </tr>
                <tr>
                    <th>Preferência de Contato:</th>
                    <td>{{ $reuniao->preferencia_contato == 'email' ? 'E-mail' : 'Telefone' }}</td>
                </tr>
            </table>
            
            <p>Por favor, entre em contato com o solicitante para confirmar o agendamento.</p>
        </div>
        <div class="footer">
            <p>Este e-mail foi enviado automaticamente pelo sistema da FAPEU.</p>
        </div>
    </div>
</body>
</html>