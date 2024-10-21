// Elementos relevantes
const estudanteRadio = document.getElementById('estudante');
const trabalhadorRadio = document.getElementById('trabalhador');
const instituicaoField = document.querySelector('.instituicao-only');
const estudanteField = document.querySelector('.estudante-only');
const outrosRadios = document.querySelectorAll('input[name="ocupacao"]:not(#estudante):not(#trabalhador)');
const btnEnviar = document.getElementById('btn-enviar');

// Exibir Nome da Instituição para Estudante e Trabalhador
[estudanteRadio, trabalhadorRadio].forEach(radio => {
    radio.addEventListener('change', () => {
        instituicaoField.style.display = 'block';
        estudanteField.style.display = estudanteRadio.checked ? 'block' : 'none';
    });
});

// Ocultar campos para "Outro"
outrosRadios.forEach(radio => {
    radio.addEventListener('change', () => {
        instituicaoField.style.display = 'none';
        estudanteField.style.display = 'none';
    });
});

// Redirecionar para a tela de pagamento ao clicar em Enviar
btnEnviar.addEventListener('click', () => {
    window.location.href = 'pagamento.html';
});

function voltar() {
    window.location.href = "login.html"; // Altere para o nome do seu arquivo de cadastro
}
