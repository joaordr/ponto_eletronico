$(document).ready(function(){
    $("#ponto").click(function(){
        $('#registro').load('registroPonto.php');
    })

    $("#editarCadastro").click(function(){
        $('#registro').load('EditarFuncionario.php');
    })
});