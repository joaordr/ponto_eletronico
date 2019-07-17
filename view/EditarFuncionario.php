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

<div class="row">
    <div class="col"></div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Dados do Funcionário</h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <h5>Nome completo:</h5> <p id="dadoNome"></p>
                </div>
                <div class="row">
                    <h5>CPF:</h5> <p id="dadoCpf"></p>
                </div>
                <div class="row">
                    <h5>RG</h5> <p id="dadoRg"></p>
                </div>
                <div class="row">
                    <h5>Data de nascimento:</h5> <p id="dadoDtNasc"></p>
                </div>
                <div class="row">
                    <h5>Email:</h5> <p id="dadoEmail"></p>
                </div>
                <div class="row">
                    <h5>Telefone:</h5> <p id="dadoTelefone"></p>
                </div>
                <div class="row">
                    <h5>Cargo:</h5> <p id="dadoCargo"></p>
                </div>
                <div class="row">
                    <h5>Setor de atuação:</h5> <p id="dadoSetor"></p>
                </div>
            </div>
        </div>
    </div>
    <div class="col"></div>
</div>
<div class="row">
    <div class="col"></div>
    <div class="col-lg-6">
        <button type="button" class="btn btn-warning btn-lg btn-block" data-toggle="modal"data-target="#modalUpdate" onclick="load_modal_editar();">Alterar dados</button>
    </div>
    <div class="col"></div>
</div>


<!-- Modal Editar Funcionario-->
<div class="modal" id="modalUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">Editar cadastro</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </div>
            <div class="modal-body">
                <form name="updateFuncionario" id="updateFuncionario" method="POST">
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
                    <button type="submit" class="btn btn-primary">Alterar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript" src="../resources/js_page/updateFuncionario.js"></script>

<style type="text/css">
    .panel{
        box-shadow: 20px 30px 50px #808080;
        background-color: #fff;
        padding: 15px;
        border-radius: 10px;
        margin-top: 10px;
        margin-bottom: 10px;
    }
    .panel-heading{
        background-color: #333;
        color: #fff;
        padding: 15px;
        margin: -15px -15px 10px -15px; /*superior, direita, inferior, esquerda*/
        border-top-left-radius: 10px;
        border-top-right-radius: 10px;
    }
    h5{
        padding-left: 10px;
    }

</style>