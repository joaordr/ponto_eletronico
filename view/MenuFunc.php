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
        				<a class="nav-link" href="#" id="ponto">Registrar Ponto <span class="sr-only">(current)</span></a>
      				</li>
              <li class="nav-item">
                <a class="nav-link" href="#" id="sair">Encerrar seção<span class="sr-only">(current)</span></a>
              </li>
    			</ul>
  			</div>
		</nav>
	</header>

  <div class="container" id="registro">
      <div class="row">
        <div class="col">
           <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">#</th>
                <th scope="col">Dia do Mês</th>
                <th scope="col">Entrada 1</th>
                <th scope="col">Saida 1</th>
                <th scope="col">Entrada 2</th>
                <th scope="col">Saida 2</th>
                <th scope="col">Entrada 3</th>
                <th scope="col">Saida 3</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row">1</th>
                  <td>1 de Julho</td>
                  <td>08:00</td>
                  <td>12:00</td>
                  <td>13:00</td>
                  <td>17:00</td>
                  <td>17:00</td>
                  <td>18:30</td>
                </tr>
            </tbody>
          </table>
        </div>
        <div class="col">
          <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
            <button type="button" class="btn btn-primary btn-lg">Entrada 1</button>
            <button type="button" class="btn btn-primary btn-lg">Saida 1</button>
          </div>
          <div class="row">
            <button type="button" class="btn btn-primary btn-lg">Entrada 2</button>
            <button type="button" class="btn btn-primary btn-lg">Saida 2</button>
          </div>
          <div class="row">
            <button type="button" class="btn btn-primary btn-lg">Entrada 3</button>
            <button type="button" class="btn btn-primary btn-lg">Saida 3</button>
          </div>
            </div>
          </div>
           
        </div>
    </div>
  </div>
  <style type="text/css">
    button{
      margin: 20px;
    }
    #registro{
      margin-top: 20px;
    }

  </style>
</body>

</html>