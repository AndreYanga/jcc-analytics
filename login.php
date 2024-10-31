<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="./assets/css/login.css">
</head>
<body>
    <div class="container">
        <h2>Login</h2>
        <p>Digite seu e-mail para continuar</p>
        <div class="form-group">
            <label for="email">E-mail:</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-actions">
           
           <button class="btn-login" onclick="entrar()">Entrar</button>
           <p class="link-voltar" onclick="voltar()">Não tem uma conta? <span>Inscreva-se</span></p> 
            
        </div>
    </div>

    <script>
        function entrar() {
            const email = document.getElementById('email').value;
            if (email) {
                window.location.href = "pagamento.html";
            } else {
                alert("Por favor, insira um e-mail válido.");
            }
        }

        function voltar() {
            window.location.href = "cadastrar.html"; // Altere para o nome do seu arquivo de cadastro
        }
    </script>
</body>
</html>
