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
    <script type="text/javascript" src="resources/jquery_confirm/jquery-confirm.min.js"></script>
    <link rel="stylesheet" type="text/css" href="resources/jquery_confirm/jquery-confirm.min.css">
    <script type="text/javascript" src="resources/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="resources/js/localization/messages_pt_BR.js"></script>
    <script type="text/javascript" src="resources/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="resources/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="resources/js/validacao/inicio.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="resources/css/inicio.css">
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
                <h5 class="modal-title" id="exampleModalLabel">Login de Administrador</h5>
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
                            <label for="userLogin" generated="true" class="error"></label>
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
                            <label for="senhaLogin" generated="true" class="error"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" id="btnEntrar">Entrar</button>
                        </div>
                    </div>
                    <!--<div class="row">
                        <div class="col">
                            <button type="button" class="btn btn-secondary btn-lg btn-block" data-toggle="modal" data-target="#modalRegistrarAdm" data-dismiss="modal" id="btnRegistrar">Registrar-se</button>
                        </div>
                    </div>-->
                    
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
                <h5 class="modal-title" id="exampleModalLabel">Login de Funcionário</h5>
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
                            <label for="userLogin" generated="true" class="error"></label>
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
                            <label for="senhaLogin" generated="true" class="error"></label>
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
<!--<div class="modal fade" id="modalRegistrarAdm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
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
                            <label for="userLogin" generated="true" class="error"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="userLogin">Email do usuário</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                    </div>
                                    <input type="text" name="emailLogin" id="emailLogin" class="form-control">
                                </div>
                            </div>
                            <label for="emailLogin" generated="true" class="error"></label>
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
                            <label for="senhaLoginCad" generated="true" class="error"></label>
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
                            <label for="senhaLoginCon" generated="true" class="error"></label>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-lg btn-block" id="btnCadastro">Registrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>-->

<script type="text/javascript" src="resources/js/request_api.js"></script>
<script type="text/javascript" src="resources/js_page/inicio.js"></script>
</body>
</html>

<style type="text/css">
    label.error{
        color: #8C1717;
        font-size: 8pt;
        text-align: left;
    }
</style>