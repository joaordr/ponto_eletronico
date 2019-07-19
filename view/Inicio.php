<!DOCTYPE HTML>
<html>
<head>
    <title>Inicio</title>
    <link rel="icon" type="imagem/png" href="resources/img/icone.png"/>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- jQuery primeiro, Bootstrap JS -->
    <script type="text/javascript" src="resources/js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="../resources/jquery_confirm/jquery-confirm.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../resources/jquery_confirm/jquery-confirm.min.css">
    <script type="text/javascript" src="resources/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="resources/js/localization/messages_pt_BR.js"></script>
    <script type="text/javascript" src="resources/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="resources/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"><!--tag meta viewport responsiva-->
    
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-4"></div>
        <div class="col-lg-4">
            <div class="card" >
            <div class="card-body">
                <h4 id="title">Bem vindo</h4>
                <img src="resources/img/icone.png" id="icone">
                <h5 class="card-title" id="aviso">Selecione o modo de acesso</h5>
                <button type="button" class="btn btn-primary btn-lg button" data-toggle="modal"
                        data-target="#modalLoginAdm"><i class="fa fa-users" aria-hidden="true"></i>  Administrador
                </button>
                <button type="button" class="btn btn-success btn-lg button" data-toggle="modal"
                        data-target="#modalLoginFunc"><i class="fa fa-user" aria-hidden="true"></i>  Funcionário
                </button>
            </div>
        </div>
        </div>
        <div class="col-lg-4"></div>
    </div> 
    <div class="row">
        <div class="footer">
            <h6>SPE - Sistema de Ponto Eletrônico | 2019&copy;</h6>
        </div>
    </div> 
</div>

<!-- Modal login Adm -->
<div class="modal" id="modalLoginAdm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </div>
            <div class="modal-body">
                <form name="formEntrarAdm" id="formEntrarAdm">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Nome de usuário</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-user"></i></div>
                                    </div>
                                    <input type="text" name="userLogin" id="userLogin" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Senha</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-lock"></i></div>
                                    </div>
                                    <input type="password" name="senhaLogin" id="senhaLogin" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" id="btnEntrar">Entrar</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#modalRegistrarAdm" data-dismiss="modal" id="btnRegistrar">Registrar-se</button>
                        </div>
                    </div>
                    
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal login Funcionario -->
<div class="modal fade" id="modalLoginFunc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </div>
            <div class="modal-body">
                <form name="formEntrarFunc" id="formEntrarFunc">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Nome de usuário</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-user"></i></div>
                                    </div>
                                    <input type="text" name="userLogin" id="userLogin" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Senha</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-lock"></i></div>
                                    </div>
                                    <input type="password" name="senhaLogin" id="senhaLogin" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-success btn-lg btn-block" id="btnEntrarFunc">Entrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal login Registrar adm -->
<div class="modal fade" id="modalRegistrarAdm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro de Administrador</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </div>
            <div class="modal-body">
                <form name="formNovoUsuario" id="formNovoUsuario">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="userLogin">Nome de usuario</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-user"></i></div>
                                    </div>
                                    <input type="text" name="userLogin" id="userLogin" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="userLogin">Nome de usuário</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-user"></i></div>
                                    </div>
                                    <input type="text" name="userLogin" id="userLogin" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Senha</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-lock"></i></div>
                                    </div>
                                    <input type="password" name="senhaLoginCad" id="senhaLoginCad" class="form-control">
                                </div>
                                <span class="badge badge-secondary">Senha de até 10 caracteres.</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label>Confirmar Senha</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-lock"></i></div>
                                    </div>
                                    <input type="password" name="senhaLoginCon" id="senhaLoginCon" class="form-control">
                                </div>
                                <small style="color: red; display: none;" id="senhasDiferentesMsg">As senhas devem ser iguais!
                                </small>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-success btn-lg btn-block" id="btnCadastro">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="resources/js/request_api.js"></script>
<script type="text/javascript" src="resources/js_page/inicio.js"></script>
<style type="text/css">

                    body {
                        background-color: #F7F5FE;
                        height: 100%
                    }
                    .container{
                        min-height: 100%;
                        position: relative;
                    }
                    .card{
                        margin-top: 50px;
                        box-shadow: 20px 20px 50px #808080;
                    }
                    .button {
                        width: 220px;
                        margin-top: 20px;
                        margin-bottom: 10px;
                        margin-left: 80px;
                        border-radius: 50px;
                    }

                    #icone {
                        width: 100px;
                        height: 100px;
                        margin-left: 145px;
                        margin-bottom: 20px;
                    }

                    #title {
                        text-align: center;
                    }
                    #aviso{
                        text-align: center;
                        font-size: 13pt;
                    }
                    #btnEntrar, #btnEntrarFunc, #btnCadastro{
                        margin-bottom: 20px;
                        border-radius: 50px;
                    }
                    #btnRegistrar{
                        border-radius: 50px;
                        margin-top: 10px;
                    }
                    .modal-header{
                        background-color: #333;
                        color: #fff;
                    }
                    .close{
                        color: #fff;
                    }
                    .close:hover{
                        color: red;
                    }
                    .footer{
                        position: absolute;
                        bottom: 0;
                        width: 100%;
                        background-color: #333;
                        
                    }
                    .footer h6{
                        color: #fff;
                        font-weight: normal;
                        text-align: center;
                    }

                </style>
<script type="text/javascript">
            $(document).ready(function(){
            $("#formEntrarAdm").validate({
                rules:{
                    userLogin: {
                        required: true,
                        maxlength: 100
                    },
                    senhaLogin: {
                        required: true,
                        maxlength: 10
                    }
                }
            })

            $("#formEntrarFunc").validate({
                rules:{
                    userLogin: {
                        required: true,
                        maxlength: 100
                    },
                    senhaLogin: {
                        required: true,
                        maxlength: 10
                    }
                }
            })

            $("#formNovoUsuario").validate({
                rules:{
                    userLogin: {
                        required: true,
                        maxWords: 1,
                        maxlength: 25
                    },
                    emailLogin: {
                        required: true,
                        email: true,
                        maxWords: 1
                    },
                    senhaLoginCad: {
                        required: true,
                        maxlength: 10,
                    },
                    senhaLoginCon: {
                        required: true,
                        maxlength: 10
                    }
                }
            })
    });
</script>

</body>
</html>