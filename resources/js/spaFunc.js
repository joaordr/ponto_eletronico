$(document).ready(function(){
	$('#registro').load('registroPonto.php');

	$("#ponto").click(function(){
        $('#registro').load('registroPonto.php');
    })
   $("#editarCadastro").click(function(){
   		$("#registro").removeAttr();
        $('#registro').load('dadosFuncionario.php');
    })
});