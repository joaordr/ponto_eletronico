<!DOCTYPE html>
<html>
<head>
    <title>Cadastro de Empresa</title>
    <link rel="icon" type="imagem/png" href="../resources/img/icone.png"/>
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
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-lg-6">
            <div class="panel panel-default jumbotron">
                <div class="panel-heading">
                    <h5>Cadastre a empresa aqui:</h5>
                </div>
                <div class="panel-body">
                    <form name="cadEmpresa" id="cadEmpresa" method="POST">
                        <div class="form-group">
                            <label for="nome">Nome da empresa</label>
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="razaoSocial">Razão Social</label>
                            <input type="text" name="razaoSocial" id="razaoSocial" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" name="cnpj" id="cnpj" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ramo">Ramo de atividade</label>
                            <input type="text" name="ramo" id="ramo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" id="telefone" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
    <script type="text/javascript" src="../resources/js/request_api.js"></script>
    <script type="text/javascript" src="../resources/js_page/cadastroEmpresa.js"></script>
</body>
<script type="text/javascript">
  $(document).ready(function(){
    $("#cadEmpresa").validate({
      rules: {
        nome: {
          maxlength: 50,
          maxWords: 5
        },
        razaoSocial: {
          required: true,
          maxlength: 80,
          maxWords: 5
        },
        cnpj: {
          required: true,
          cnpjBR: true
        }, 
        ramo: {
          maxlength: 100,
          maxWords: 20
        }
        telefone: {
          minlength: 
        }
      }
    })
  })
</script>
</html>
