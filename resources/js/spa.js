$(document).ready(function(){
  $("#empresa").click(function(){
      $('#carregaDados').load('dadosEmpresa.php');
  })
  $("#cadFuncionario").click(function(){
      $('#carregaDados').load('cadastroFuncionario.php');
  })
  $("#regFuncionario").click(function(){
      $('#carregaDados').load('funcionariosRegistrados.php');
  })
  $("#registros").click(function(){
      $('#carregaDados').load('RegistroPonto.php');
  })
})

