<!DOCTYPE html>
<html>
<head>
    <title>Confirmação de Solicitação de Reunião</title>
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
            margin-top: 20px;
            font-size: 12px;
            color: #777;
        }
        .details {
            margin: 20px 0;
            background-color: #fff;
            padding: 15px;
            border-radius: 5px;
            border-left: 4px solid #06551a;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h2>Confirmação de Solicitação de Reunião</h2>
        </div>
        <div class="content">
            <p>Olá, {{ $reuniao->nome }}!</p>
            
            <p>Recebemos sua solicitação de reunião com o assunto "{{ $reuniao->assunto }}" para o dia {{ \Carbon\Carbon::parse($reuniao->data_reuniao)->format('d/m/Y') }} às {{ $reuniao->horario_reuniao }}.</p>
            
            <div class="details">
                <p><strong>Assunto:</strong> {{ $reuniao->assunto }}</p>
                <p><strong>Data Preferencial:</strong> {{ \Carbon\Carbon::parse($reuniao->data_reuniao)->format('d/m/Y') }}</p>
                <p><strong>Horário Preferencial:</strong> {{ $reuniao->horario_reuniao }}</p>
            </div>
            
            <p>Nossa equipe analisará sua solicitação e entrará em contato em breve para confirmar o agendamento. Conforme sua preferência, entraremos em contato via {{ $reuniao->preferencia_contato == 'email' ? 'e-mail' : 'telefone' }}.</p>
            
            <p>Caso tenha alguma dúvida ou precise alterar sua solicitação, entre em contato conosco pelo e-mail projetos@fapeu.org.br ou pelo telefone (48) 3331-7400.</p>
            
            <p>Agradecemos seu interesse em reunir-se com nossa equipe.</p>
            
            <p>Atenciosamente,<br>Equipe FAPEU</p>
        </div>
        <div class="footer">
            <p>Este e-mail foi enviado automaticamente pelo sistema da FAPEU.</p>
        </div>
    </div>
</body>
</html>