<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instruções de Pagamento</title>
    <link rel="stylesheet" href="./assets/css/pagamento.css">
</head>
<body>
    <div class="container1">
        <h2>Instruções de Pagamento</h2>
        <p class="descricao">
            Para ativar sua inscrição, deposite o valor na conta abaixo:
        </p>
        <div class="detalhes-pagamento">
            <ul>
                <li><strong>Banco:</strong> BAI</li>
                <li><strong>Conta:</strong> 1234567890</li>
                <li><strong>IBAN:</strong> 123456789009876521</li>
                <li><strong>Nome da Conta:</strong> ASDFG PIUYT ZXCVBN</li>
            </ul>
        </div>

        <div class="form-group">
            <label for="comprovante">Anexar Comprovativo (PDF, JPG, PNG):</label>
            <input type="file" id="comprovante" name="comprovante" accept=".pdf, .jpg, .png">
        </div>

        <div class="form-actions">
            <button class="btn-enviar" type="button">Enviar Comprovativo</button>
        </div>
    </div>
</body>
</html>
