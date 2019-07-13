<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>SPE - Sistema de Ponto Eletrônico</title>
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
        <script type="text/javascript">
            $(document).ready(function(){
                $("#formEmp").validate({
                    rules:{
                         nomeEmp: {
                             required: true,
                             maxlength: 100,
                             minlength: 5
                         },
                         cnpjEmp: {
                             required: true,
                             maxlength: 19,
                             minlength: 18,
                             cnpjBR: true
                         },
                         ramoEmp:{
                            maxlength: 100,
                            minlength: 5,
                            required: true
                         },
                         emailEmp:{
                            email:true,
                            required: true,
                            maxlength: 100
                         },
                         telefoneEmp:{
                            maxlength: 13,
                            minlength: 13,
                            required: true
                         }
                     }
                })
            })
        </script>
    </head>
    <body style="background-image: linear-gradient(to bottom, white, blue);">
        <div class="container" style="width: 400px; background-color: #ffffff; border-radius: 30px; margin-top: 50px;">
            
            <h5 style="text-align: center;">Cadastre sua empresa aqui</h5>
            <form id="formEmp" name="formEmp" method="POST" action="">
                <div class="form-group">
                    <label for="nome">Nome da Empresa</label>
                    <input type="text" name="nome" id="nome" class="form-control">
                </div>
                <div class="form-group">
                    <label for="cnpj">CNPJ</label>
                    <input type="text" name="cnpj" id="cnpj" class="form-control">
                </div>
                <div class="form-group">
                    <label for="ramoAtividade">Ramo de atividade</label>
                    <input type="text" name="ramoAtividade" id="ramoAtividade" class="form-control">
                </div>
                <div class="form-group">
                    <label for="emailEmp">Email</label>
                    <input type="text" name="email" id="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="telefoneEmp">Telefone de contato</label>
                    <input type="text" name="telefone" id="telefone" class="form-control">
                </div>
                <input class="btn btn-lg btn-primary btn-block" type="submit" onclick="" name="cadastrar" value="cadastrar">
      <p class="mt-5 mb-3 text-muted text-center">&copy;2019</p>
            </form>
        </div>
        
        
    </body>
</html>


