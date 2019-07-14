<!DOCTYPE HTML>
<!DOCTYPE html>
<html>
<head>
    <title>Inicio</title>
    <link rel="icon" type="imagem/png" href="resources/img/icone.png"/>
    <!-- meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- jQuery primeiro, Bootstrap JS -->
    <script type="text/javascript" src="resources/js/jquery-3.4.1.js"></script>
    <script type="text/javascript" src="resources/js/jquery.validate.min.js"></script>
    <script type="text/javascript" src="resources/js/localization/messages_pt_BR.js"></script>
    <script type="text/javascript" src="resources/js/additional-methods.min.js"></script>
    <script type="text/javascript" src="resources/bootstrap/js/bootstrap.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="resources/bootstrap/css/bootstrap.min.css" type="text/css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--tag meta viewport responsiva-->
    
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col">
            <div class="card" style="width: 18rem;">
            <div class="card-body">
                <img src="resources/img/icone.png" id="icone">
                <h5 class="card-title" id="title">Login</h5>
                <button type="button" class="btn btn-primary btn-lg button" data-toggle="modal"
                        data-target="#modalLoginAdm">Administrador
                </button>
                <button type="button" class="btn btn-success btn-lg button" data-toggle="modal"
                        data-target="#modalLoginFunc">Funcionário
                </button>
                <style type="text/css">
                    body {
                        background-color: #DCDCDC;
                    }

                    .card{
                        margin-top: 20px;
                    }
                    .button {
                        width: 160px;
                        margin-top: 10px;
                        margin-bottom: 10px;
                        margin-left: 40px;
                    }

                    #icone {
                        width: 50px;
                        height: 50px;
                        margin-left: 95px;
                    }

                    #title {
                        text-align: center;
                    }
                </style>

            </div>
        </div>
        </div>
        <div class="col"></div>
    </div>    
</div>

<!-- Modal login Adm -->
<div class="modal fade" id="modalLoginAdm" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">Login</h5>
            </div>
            <div class="modal-body">
                <form name="formEntrarAdm" id="formEntrarAdm">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="userLogin" id="userLogin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" name="senhaLogin" id="senhaLogin" class="form-control">
                    </div>
                    <button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalRegistrarAdm"
                            data-dismiss="modal">Registrar-se
                    </button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="submit" class="btn btn-primary">Log in</button>
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
            </div>
            <div class="modal-body">
                <form name="formEntrarFunc" id="formEntrarFunc">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="userLogin" id="userLogin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" name="senhaLogin" id="senhaLogin" class="form-control">
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-success">Log in</button>
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
                <h5 class="modal-title" id="exampleModalLabel">Registro</h5>
            </div>
            <div class="modal-body">
                <form name="formNovoUsuario" id="formNovoUsuario">
                    <div class="form-group">
                        <label for="userLogin">Nome de usuario</label>
                        <input type="text" name="userLogin" id="userLogin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="emailLogin">Email</label>
                        <input type="text" name="emailLogin" id="emailLogin" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" name="senhaLoginCad" id="senhaLoginCad" class="form-control">
                        <span class="badge badge-secondary">Senha de até 10 caracteres.</span>
                    </div>
                    <div class="form-group">
                        <label>Confirmar Senha</label>
                        <input type="password" name="senhaLoginCon" id="senhaLoginCon" class="form-control">
                        <small style="color: red; display: none;" id="senhasDiferentesMsg">As senhas devem ser iguais!
                        </small>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                        <button type="submit" class="btn btn-success" >Registrar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="resources/js/request_api.js"></script>
<script type="text/javascript" src="resources/js_page/inicio.js"></script>
<script type="text/javascript">
            $(document).ready(function(){
            $("#formEntrarAdm").validate({
                rules:{
                    userLogin: {
                        required: true,
                        email: true,
                        maxWords: 1,
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
                        email: true,
                        maxWords: 1,
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