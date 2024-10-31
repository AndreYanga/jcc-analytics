<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inscrição</title>
    <link rel="stylesheet" href="./assets/css/cadastro.css">
</head>
<body>
    <div class="container1">
        <h2>Formulário de Inscrição</h2>

        <form action="processar_inscricao.php" method="POST" enctype="multipart/form-data">
            <!-- Tela 1: Dados Pessoais -->
            <div class="form-group">
                <label for="primeiro-nome">Primeiro Nome:</label>
                <input type="text" id="primeiro-nome" name="primeiro-nome" required>
            </div>
            <div class="form-group">
                <label for="sobrenome">Sobrenome:</label>
                <input type="text" id="sobrenome" name="sobrenome" required>
            </div>
            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="text" id="telefone" name="telefone" required>
            </div>
            <div class="form-group">
                <label for="genero">Gênero:</label>
                <select id="genero" name="genero">
                    <option value="">Selecione</option>
                    <option value="masculino">Masculino</option>
                    <option value="feminino">Feminino</option>
                </select>
            </div>

            <!-- Tela 2: Informações Acadêmicas/Profissionais -->
            <div class="form-group">
                <label>Você é:</label>
                <input type="radio" id="estudante" name="ocupacao" value="estudante" required>
                <label for="estudante">Estudante</label>
                <input type="radio" id="trabalhador" name="ocupacao" value="trabalhador">
                <label for="trabalhador">Trabalhador(a)</label>
                <input type="radio" id="outro" name="ocupacao" value="outro">
                <label for="outro">Outro</label>
            </div>

            <div class="form-group instituicao-only" style="display: none;">
                <label for="instituicao">Nome da Instituição:</label>
                <input type="text" id="instituicao" name="instituicao">
            </div>

            <div class="form-group estudante-only" style="display: none;">
                <label for="cartao-estudante">Upload do Cartão de Estudante (PDF, JPG, PNG):</label>
                <input type="file" id="cartao-estudante" name="cartao-estudante" accept=".pdf, .jpg, .png">
            </div>

            <div class="form-actions">
                <button type="submit" class="btn-enviar">Enviar</button>
                <p class="link-voltar" onclick="voltar()">Já és inscrito? <span>Fazer o pagamento</span></p> 
            </div>
        </form>

        <!-- Contato para Ajuda -->
        <div class="contato">
            <p>Para mais informações ou ajuda, entre em contato:</p>
            <ul>
                <li><strong>E-mail:</strong> suporte@exemplo.com</li>
                <li><strong>Telefone:</strong> +244 900 000 000</li>
            </ul>
        </div>
    </div>

    <script src="./assets/js/script.js"></script>
</body>
</html>
