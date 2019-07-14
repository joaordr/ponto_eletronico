<!DOCTYPE html>
<html lang="pt-br">
<head>
	<title>Login</title>
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
        
        <script type="text/javascript">
           $(document).ready(function(){
               $("#formInscreva").validate({
                   rules:{
                       inputNome:{
                           required: true,
                           maxlength: 80,
                       },
                       inputEmail:{
                           required: true,
                           email: true,
                           maxlength: 100
                           
                       },
                       inputSenha:{
                           minlength:5,
                           maxlength: 10
                       },
                       inputConSenha:{
                           minlength:5,
                           maxlength: 10
                       }
                   }
               })
           })
        </script>
</head>
<body>
	<div class="container" style="width: 400px; background-color: #ffffff; border-radius: 30px; margin-top: 50px;">
		<!--botoes para acionar modais-->
		<button type="button" class="btn btn-success btn-lg" data-toggle="modal" data-target="#modalInscreva" style="margin-bottom: 20px; vertical-align: super;" >Inscrever-se</button><br>
		<button type="button" class="btn btn-info btn-lg" >Entrar</button>

		<!-- Modal Increver-se -->
		<div class="modal fade" id="modalInscreva" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  			<div class="modal-dialog" role="document">
    			<div class="modal-content">
      				<div class="modal-header">
        				<h5 class="modal-title" id="exampleModalLabel">Inscreva-se</h5>
      				</div>
      				<div class="modal-body">
        				<form id="formInscreva" name="formInscreva" method="POST">
                                                <div class="form-group">
        						<label>Nome Completo</label>
        						<input type="text" name="inputNome" id="inputNome" class="form-control">
        					</div>
        					<div class="form-group">
        						<label>Email</label>
        						<input type="text" name="inputEmail" id="inputEmail" class="form-control">
        					</div>
        					<div class="form-group">
        						<div class="checkbox mb-3">
        							<label>Tipo de Usuário:</label>
    								<label>
      									<input type="checkbox" value="adm"> Administrador
    								</label>
    								<label>
      									<input type="checkbox" value="func"> Funcionário
    								</label>
 							 	</div>
        					</div>
        					<div class="form-group">
        						<label>Digite sua senha</label>
        						<span class="badge badge-secondary">Senha de até 10 caracteres. Misture letras e numeros para maior segurança.</span>
        						<input type="password" name="inputSenha" id="inputSenha" class="form-control">
        					</div>
        					<div class="form-group">
        						<label>Confirme sua senha</label>
        						<input type="password" name="inputConSenha" id="inputConSenha" class="form-control">
        					</div>
        				</form>
      				</div>
      				<div class="modal-footer">
        				<button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        				<button type="button" class="btn btn-primary">Salvar</button>
      				</div>
    			</div>
  			</div>
		</div>

		<!-- Modal entrar -->
		<div class="modal fade" id="modalEntrar" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
        				<button type="button" class="btn btn-primary">Log in</button>
      				</div>
    			</div>
  			</div>
		</div>
		
	</div>

</body>
</html>