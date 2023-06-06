let limiteImoveis = 700;


function contadorAlunos(){

    let contador = $('#contador-1');
    let contadorCasas = parseFloat(contador.text());
    let limiteCasas = 10000;
    let intervalCasas = setInterval(() => {
        contadorCasas = contadorCasas + 50;
        contador.text(contadorCasas);
        if(contadorCasas == limiteCasas){
            clearInterval(intervalCasas);
        }
    }, 0.1);

}

contadorAlunos()

function contadorCursos(){
    let contadorApartamento = $('#contador-2');
    let limiteApartamento = 5000;
    let ValorInteiro = parseFloat(contadorApartamento.text());
    let intervalApartamento = setInterval(() => {
        ValorInteiro = ValorInteiro + 20;
        contadorApartamento.text(ValorInteiro);
        if(ValorInteiro == limiteApartamento){
            clearInterval(intervalApartamento);
        }
    }, 0.1);
}
contadorCursos();

function contadorFormacoes() {
    let formacoes = $('#contador-3');
    let limite = 1000;
    let ValorInteiro = parseFloat(formacoes.text());
    let intervalFormacoes = setInterval(() => {
        ValorInteiro = ValorInteiro + 10;
        formacoes.text(ValorInteiro);
        if(ValorInteiro == limite){
            clearInterval(intervalFormacoes);
        }
    }, 0.1);
}
contadorFormacoes();

$(document).ready(function() {
    $(window).scroll(function() {
      var scrollPos = $(window).scrollTop()
        console.log(scrollPos);
        if(scrollPos > 400){
            $('.feedback').css('animation', 'identifier 2s ease forwards')
        }
    });
  });
