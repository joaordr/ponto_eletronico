<div class="row">
    <div class="col-md-7 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                <h5>Bem vindo(a), </h5><h5 id="nomeFunc" style="margin-left: 10px;"></h5>
            </div>
            </div>
        </div>
    </div>
    <div class="col">
        <button type="button" class="btn btn-lg btn-block float-lg-right" id="quadro" data-toggle="modal"data-target="#modalQuadro">Quadro de Horários</button>
    </div>
</div>

<div class="row">
    <div class="col-md-7 col-sm-12">
        <div class="table-responsive">
            <table class="table table-hover rounded" id="tabela1">
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
    </div>
    <div class="col-md-5 col-sm-12">
        <div class="panel panel-default">
            <div class="panel-body">
                <div class="row">
                    <div class="col">
                        <button type="button" onclick="select_button($(this), 1)" id="ent1" class="btn btn-primary btn-lg btn-block tooltip-test" title="Horario: 08:00h ás 08:10h">Entrada 1
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" onclick="select_button($(this), 2)" id="sai1" class="btn btn-primary btn-lg btn-block tooltip-test" title="Horario: 12:00h ás 12:10h">Saida 1
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="button" onclick="select_button($(this), 3)" id="ent2" class="btn btn-primary btn-lg btn-block tooltip-test" title="Horario: 13::00h ás 13:10h">Entrada 2
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" onclick="select_button($(this), 4)" id="sai2" class="btn btn-primary btn-lg btn-block tooltip-test" title="Horario: 17:00h ás 17:10h">Saida 2
                        </button>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <button type="button" onclick="select_button($(this), 5)" id="ent3" class="btn btn-primary btn-lg btn-block tooltip-test" title="Hora Extra">Entrada 3
                        </button>
                    </div>
                    <div class="col">
                        <button type="button" onclick="select_button($(this), 6)" id="sai3" class="btn btn-primary btn-lg btn-block tooltip-test" title="Hora Extra">Saida 3
                        </button>
                    </div>
                </div>
                <button type="button" onclick="gravar_registro();" class="btn btn-dark btn-lg btn-block">Registrar
                </button>
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
<script type="text/javascript" src="../resources/js_page/menuFunc.js"></script>
<script type="text/javascript" src="../resources/js_page/updateFuncionario.js"></script>
<style type="text/css">
    @media (min-width: 992px) {
        #quadro{
            margin-top: -1px;
        }
    }
    .panel{
        padding: 8px 5px 8px 25px;
        background-color: #fff;
        box-shadow: 20px 30px 50px #808080;
        border-left: 5px solid #0066CC;
    }
    #quadro{
        background-color: #0066CC;
        color: #fff;
    }
    button {
        margin-top: 20px;
        margin-bottom: 20px;
    }

    #tabela1{
        background-color: #fff;
        box-shadow: 20px 10px 50px #808080;
        margin-right: 10px;
    }
    th, td{
        text-align: center;
    }
</style>