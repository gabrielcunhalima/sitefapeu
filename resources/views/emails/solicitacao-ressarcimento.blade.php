<!DOCTYPE html>
<html>
<head>
    <title>Nova Solicitação de Cálculo de Ressarcimento</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
        }
        .header {
            background-color: #06551a;
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
            padding: 10px;
            font-size: 12px;
            color: #777;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>Nova Solicitação de Cálculo de Ressarcimento</h2>
    </div>
    <div class="content">
        <p>Uma nova solicitação de cálculo de ressarcimento foi recebida com os seguintes dados:</p>
        
        <table>
            <tr>
                <th>Projeto:</th>
                <td>{{ $solicitacao->nome_projeto }}</td>
            </tr>
            <tr>
                <th>Coordenador:</th>
                <td>{{ $solicitacao->nome_coordenador }}</td>
            </tr>
            <tr>
                <th>Vigência (meses):</th>
                <td>{{ $solicitacao->vigencia_meses }}</td>
            </tr>
            <tr>
                <th>Financiador:</th>
                <td>{{ $solicitacao->nome_financiador }}</td>
            </tr>
            <tr>
                <th>Parcelas:</th>
                <td>{{ $solicitacao->num_parcelas }}</td>
            </tr>
            <tr>
                <th>Solicitante:</th>
                <td>{{ $solicitacao->nome_solicitante }}</td>
            </tr>
            <tr>
                <th>Contato:</th>
                <td>{{ $solicitacao->contato }}</td>
            </tr>
            <tr>
                <th>Instituição:</th>
                <td>{{ $solicitacao->instituicao ? $solicitacao->instituicao->nome : 'Não especificada' }}</td>
            </tr>
            <tr>
                <th>Data:</th>
                <td>{{ $solicitacao->created_at->format('d/m/Y H:i') }}</td>
            </tr>
        </table>
        
        <p>A planilha orçamentária do projeto está anexada a este e-mail.</p>
        <p>Por favor, analise a solicitação e entre em contato com o solicitante o mais breve possível.</p>
    </div>
    <div class="footer">
        <p>Esta mensagem foi enviada automaticamente pelo sistema da FAPEU.</p>
    </div>
</body>
</html>