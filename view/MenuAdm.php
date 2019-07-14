<!DOCTYPE html>
<html>
<head>
	<title>Administrador</title>
	<link rel="icon" type="imagem/png" href="../resources/img/icone.png" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- jQuery primeiro, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../resources/js/jquery-3.4.1.js" ></script>
    <script type="text/javascript" src="../resources/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../resources/js/localization/messages_pt_BR.js"></script>
    <script type="text/javascript" src="../resources/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="../resources/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css"  type="text/css">
    <link href="../recursos/css/floating-labels.css" rel="stylesheet" type="text/css">
    <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--tag meta viewport responsiva-->
    <script type="text/javascript" src="../resources/js/spa.js"></script>
</head>
<body>
	<header>
		<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  			<a class="navbar-brand" href="#">
    			<img src="../resources/img/icone.png" width="30" height="30" class="d-inline-block align-top" alt="">
    			Sistema de Ponto Eletrônico
  			</a>
  			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    		<span class="navbar-toggler-icon"></span>
  			</button>
  			<div class="collapse navbar-collapse" id="navbarNavDropdown">
    			<ul class="navbar-nav">
      				<li class="nav-item active">
        				<a class="nav-link" href="#" id="empresa">Empresa <span class="sr-only">(current)</span></a>
      				</li>
              <li class="nav-item active">
                <a class="nav-link" data-page="cadFuncionario" href="#" id="cadFuncionario">Cadastro de Funcionário</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" data-page="regFuncionario" href="#" id="regFuncionario">Funcionários registrados</a>
              </li>
              <li class="nav-item" id="sair">
                <a class="nav-link" href="#" id="sair">Encerrar seção</a>
              </li>

    			</ul>
  			</div>
		</nav>
	</header>

  <div class="container" id="carregaDados">
    
  </div>
</body>

</html>
