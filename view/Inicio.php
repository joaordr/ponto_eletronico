<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
	<title>Inicio</title>
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
</head>
<body>
	<div class="container">
	  <div class="col-lg-3"></div>
	  <div class="col-lg-6 col-md-12">
		<div class="card" style="width: 18rem;">
  			<div class="card-body">
  				<img src="../resources/img/icone.png" id="icone">
    			<h5 class="card-title" id="title">Login</h5>
    			<button type="button" class="btn btn-primary btn-lg button" data-toggle="modal" data-target="#modalLoginAdm">Administrador</button>
				<button type="button" class="btn btn-success btn-lg button" data-toggle="modal" data-target="#modalLoginFunc">Funcionario</button>
				<style type="text/css">
					body{
						background-color: #DCDCDC;
					}
					.button{
						width: 160px;
						margin-top: 10px;
						margin-bottom: 10px;
						margin-left: 40px;
					}
					#icone{
						width: 50px;
						height: 50px;
						margin-left: 95px;
					}
					#title{
						text-align: center;
					}
				</style>

  			</div>
		</div>
	   </div>	
	   <div class="col-lg-3"></div>
	</div>

	<!-- Modal login Adm -->
		<div class="modal fade" id="modalLoginAdm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    			<div class="modal-content">
      				<div class="modal-header ">
        				<h5 class="modal-title" id="exampleModalLabel">Login</h5>
      				</div>
      				<div class="modal-body">
        				<form name="formEntrar" id="formEntrar" method="POST">
        					<div class="form-group">
        						<label>Email</label>
        						<input type="text" name="emailLogin" id="emailLogin" class="form-control">
        					</div>
        					<div class="form-group">
        						<label>Senha</label>
        						<input type="password" name="senhaLogin" id="senhaLogin" class="form-control">
        					</div>
        				</form>
      				</div>
      				<div class="modal-footer">
      					<button type="button" class="btn btn-secondary" data-dismiss="modal">Registrar-se</button>
        				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        				<button type="button" class="btn btn-primary">Log in</button>
      				</div>
    			</div>
  			</div>
		</div>

		<!-- Modal login Funcionario -->
		<div class="modal fade" id="modalLoginFunc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    			<div class="modal-content">
      				<div class="modal-header">
        				<h5 class="modal-title" id="exampleModalLabel">Login</h5>
      				</div>
      				<div class="modal-body">
        				<form name="formEntrar" id="formEntrar" method="POST">
        					<div class="form-group">
        						<label>Email</label>
        						<input type="text" name="emailLogin" id="emailLogin" class="form-control">
        					</div>
        					<div class="form-group">
        						<label>Senha</label>
        						<input type="password" name="senhaLogin" id="senhaLogin" class="form-control">
        					</div>
        				</form>
      				</div>
      				<div class="modal-footer">
        				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        				<button type="button" class="btn btn-success">Log in</button>
      				</div>
    			</div>
  			</div>
		</div>

		
	</div>
</body>
</html>