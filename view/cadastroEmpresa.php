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
    <script type="text/javascript" src="../resources/jquery_mask/jquery.mask.min.js"></script>
    <script type="text/javascript" src="../resources/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="../resources/js/validacao/cadastroEmpresa.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../resources/css/cadastroEmpresa.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--tag meta viewport responsiva-->

</head>
<body style="background-color: #F7F5FE;">
<div class="container-fluid jumbotron">
    <div class="row">
        <div class="col"></div>
        <div class="col-lg-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h5>Cadastro de empresa</h5>
                </div>
                <div class="panel-body">
                    <form name="cadEmpresa" id="cadEmpresa" method="POST">
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="nome">Nome da empresa</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-briefcase"></i></div>
                                        </div>
                                        <input type="text" name="nome" id="nome" class="form-control">
                                    </div>
                                    <label for="nome" generated="true" class="error"></label>
                                </div>
                            </div>
                        </div>
                        
                        <div  class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="razaoSocial">Razão Social</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-building"></i></div>
                                        </div>
                                        <input type="text" name="razaoSocial" id="razaoSocial" class="form-control">
                                    </div>
                                    <label for="razaoSocial" generated="true" class="error"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="cnpj">CNPJ</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-address-card"></i></div>
                                        </div>
                                        <input type="text" name="cnpj" id="cnpj" class="form-control">
                                    </div>
                                    <label for="cnpj" generated="true" class="error"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="ramo">Ramo de atividade</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-cubes"></i></div>
                                        </div>
                                        <input type="text" name="ramo" id="ramo" class="form-control">
                                    </div>
                                    <label for="ramo" generated="true" class="error"></label>
                                </div>
                            </div>
                            <div class="col">
                                <div class="form-group">
                                    <label for="telefone">Telefone</label>
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text"><i class="fa fa-phone"></i></div>
                                        </div>
                                        <input type="text" name="telefone" id="telefone" class="form-control">
                                    </div>
                                    <label for="telefone" generated="true" class="error"></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col">
                                <button type="submit" class="btn btn-primary btn-lg btn-block">Cadastrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col"></div>
    </div>
    <script type="text/javascript" src="../resources/js/request_api.js"></script>
    <script type="text/javascript" src="../resources/js_page/cadastroEmpresa.js"></script>
</body>

</html>
