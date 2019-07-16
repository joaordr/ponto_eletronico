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
                <li class="nav-item float-lg-right">
                    <a class="nav-link" href="#" onclick="logout();" id="sair">Encerrar seção<span class="sr-only">(current)</span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>

<div class="container-fluid" id="registro">
    <div class="row">
        <div class="col-md-7 col-sm-12">
            <div class="alert alert-info" role="alert" id="nomeFunc">Bem vindo(a), </div>
        </div>
        <div class="col">
                <button type="button" class="btn btn-info btn-lg btn-block float-lg-right" id="quadro" data-toggle="modal"
                        data-target="#modalQuadro">Quadro de Horários</button>
        </div>
    </div>

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
                                    class="btn btn-primary btn-lg btn-block tooltip-test" title="Horario: 08:00h ás 08:10h">Entrada 1
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" onclick="select_button($(this), 2)" id="sai1"
                                    class="btn btn-primary btn-lg btn-block tooltip-test" title="Horario: 12:00h ás 12:10h">Saida 1
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="button" onclick="select_button($(this), 3)" id="ent2"
                                    class="btn btn-primary btn-lg btn-block tooltip-test" title="Horario: 13::00h ás 13:10h">Entrada 2
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" onclick="select_button($(this), 4)" id="sai2"
                                    class="btn btn-primary btn-lg btn-block tooltip-test" title="Horario: 17:00h ás 17:10h">Saida 2
                            </button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="button" onclick="select_button($(this), 5)" id="ent3"
                                    class="btn btn-primary btn-lg btn-block tooltip-test" title="Hora Extra">Entrada 3
                            </button>
                        </div>
                        <div class="col">
                            <button type="button" onclick="select_button($(this), 6)" id="sai3"
                                    class="btn btn-primary btn-lg btn-block tooltip-test" title="Hora Extra">Saida 3
                            </button>
                        </div>
                    </div>
                    <button type="button" onclick="gravar_registro();" class="btn btn-dark btn-lg btn-block">
                        Registrar
                    </button>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal quadro de horarios -->
<div class="modal fade" id="modalQuadro" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">Quadro de Horários</h5>
            </div>
            <div class="modal-body">
                <img src="../resources/img/icone.png">
            </div>
        </div>
    </div>
</div>



<script type="text/javascript" src="../resources/js/request_api.js"></script>
<script type="text/javascript" src="../resources/js_page/menuFunc.js"></script>
</body>
</html>

<style type="text/css">
    @media (min-width: 992px) {
        #quadro{
            margin-top: -1px;
        }
        #sair{
            margin-left: 790px;
        }
    }
    #sair:hover{
        color: red;
    }

    .panel-body{
        border: 1px solid  #87CEEB;
        border-radius: 20px;
        padding-left: 20px;
        padding-right: 20px;
    }
    button {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    #registro {
        margin-top: 20px;
    }
</style>