var agendamentos = [];

function criarNovoAgendamento(nomeDigitado, dataDigitada, horaDigitada){
    return{
        nome:nomeDigitado,
        data:dataDigitada,
        hora:horaDigitada,
    }
}
function validaForm (event){
    event.preventDefault(); 
    const nomeDigitado = document.getElementById('id-nome').value;
    const dataDigitada = document.getElementById('id-data').value;
    const horaDigitada = document.getElementById('id-hora').value;

    if (nomeDigitado==""||dataDigitada==""||horaDigitada==""){
        alert("Por favor, preencha todos os campos!")
    }
    else{
        const novoAgendamento = criarNovoAgendamento(nomeDigitado, dataDigitada, horaDigitada);
        
        agendamentos.push(novoAgendamento);  

        displayAgendamento(novoAgendamento);
        console.log(agendamentos);
    }return
  
}
function displayAgendamento(novoAgendamento){
       const showName = document.getElementById('id-info-nome');
       const showHora = document.getElementById('id-info-hora');
       const showData = document.getElementById('id-info-data');

       showName.textContent = novoAgendamento.nome;
       showHora.textContent = novoAgendamento.data;
       showData.textContent = novoAgendamento.hora;
}

const resultForm = document.getElementById('formulario');
resultForm.addEventListener('submit',validaForm);