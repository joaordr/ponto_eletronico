<!DOCTYPE html>
<html>
<head>
    <title>Administrador</title>
    <link rel="icon" type="imagem/png" href="../resources/img/icone.png"/>
	<title>Cadastro de Funcionário</title>
	<link rel="icon" type="imagem/png" href="../resources/img/icone.png" />
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- jQuery primeiro, then Popper.js, then Bootstrap JS -->
    <script type="text/javascript" src="../resources/js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="../resources/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="../resources/js/localization/messages_pt_BR.js"></script>
    <script type="text/javascript" src="../resources/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="../resources/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--tag meta viewport responsiva-->
    <script type="text/javascript" src="../resources/js/spa.js"></script>

    <script type="text/javascript">
   $(document).ready(function(){
      $("#cadFuncionario").validate({
         rules:{
            nome: {
               required: true,
               maxlength: 100

            },
            cpf: {
               cpfBR: true,
               required: true
            }, 
            rg:{
               required: true
            },
            dtNasc:{
               required: true,
               date: true
            },
            email:{
               required: true,
               email: true
            },
            telefone:{
               required: true,
               maxlength: 10
            },
            cargo:{
               required: true,
               maxlength: 100
            },
            setor:{
               required: true,
               maxlength: 100
            }
         }
      })
   });
</script>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-lg-6">
            <div class="panel panel-default jumbotron">
                <div class="panel-body">
                    <form name="cadFuncionario" id="cadFuncionario" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome completo</label>
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cpf">CPF</label>
                            <input type="text" name="cpf" id="cpf" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="rg">RG</label>
                            <input type="text" name="rg" id="rg" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="dtNasc">Data de Nascimento</label>
                            <input type="date" name="dtNasc" id="dtNasc" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" id="telefone" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cargo">Cargo</label>
                            <input type="text" name="cargo" id="cargo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="setor">Setor</label>
                            <input type="text" name="setor" id="setor" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
</div>
<script type="text/javascript" src="../resources/js/request_api.js"></script>
<script type="text/javascript" src="../resources/js_page/cadastroAdm.js"></script>
</body>
</html>