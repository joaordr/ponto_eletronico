<!DOCTYPE html>
<html>
<head>
    <title>Área do Funcionário</title>
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

    <style type="text/css">
        button {
            margin: 20px;
        }

        #registro {
            margin-top: 20px;
        }

    </style>

</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="../resources/img/icone.png" width="30" height="30" class="d-inline-block align-top" alt="">
            Sistema de Ponto Eletrônico
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="#" id="ponto">Registrar Ponto <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" onclick="logout();" id="sair">Encerrar seção<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="container" id="registro">
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <table class="table" id="tabela1">
                <thead class="thead-dark">
                <tr>
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
                </tbody>
            </table>
        </div>
        <div class="col-md-5 col-sm-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="row">
                        <div class="col">
                            <button type="button" onclick="select_button($(this), 1)" id="ent1"
                                    class="btn btn-primary btn-lg btn-block">Entrada 1
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" onclick="select_button($(this), 2)" id="sai1"
                                    class="btn btn-primary btn-lg btn-block">Saida 1
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="button" onclick="select_button($(this), 3)" id="ent2"
                                    class="btn btn-primary btn-lg btn-block">Entrada 2
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" onclick="select_button($(this), 4)" id="sai2"
                                    class="btn btn-primary btn-lg btn-block">Saida 2
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="button" onclick="select_button($(this), 5)" id="ent3"
                                    class="btn btn-primary btn-lg btn-block">Entrada 3
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" onclick="select_button($(this), 6)" id="sai3"
                                    class="btn btn-primary btn-lg btn-block">Saida 3
                            </button>
                        </div>
                    </div>
                    <button type="button" onclick="gravar_registro();" class="btn btn-primary btn-lg btn-block">
                        Registrar
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>
<script type="text/javascript" src="../resources/js/request_api.js"></script>
<script type="text/javascript" src="../resources/js_page/menuFunc.js"></script>
</body>
</html>