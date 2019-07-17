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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta  name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--tag meta viewport responsiva-->
    <script type="text/javascript" src="../resources/js/spaAdm.js"></script>
</head>
<body style="background-color: #F7F5FE;">
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
              <li class="nav-item">
                <a class="nav-link" href="#" onclick="logout();" id="sair">Encerrar seção</a>
              </li>

    			</ul>
  			</div>
		</nav>
	</header>

  <div class="container-fluid" id="carregaDados">
    
  </div>

  <style type="text/css">
      @media (min-width: 992px) {
          #sair{
            margin-left: 440px;
          }
      }
      #sair:hover{
            color: red;
      }
      .container-fluid{
        margin-top: 20px;
      }
      li.nav-item #sair:hover{
        background-color: #990000;
        border-radius: 5px;
        color: #fff
    }
  </style>

    <script type="text/javascript" src="../resources/js/request_api.js"></script>
    <script type="text/javascript" src="../resources/js_page/menuAdm.js"></script>
</body>

</html>
