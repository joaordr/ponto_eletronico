<link rel="stylesheet" type="text/css" href="../resources/css/dadosFuncionario.css">
<div class="row">
    <div class="col"></div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h2>Dados do Funcionário</h2>
            </div>
            <div class="panel-body">
                <div class="row">
                    <h5>Nome completo:</h5> <h5 id="dadoNome"></h5>
                </div>
                <div class="row">
                    <h5>CPF:</h5> <h5 id="dadoCpf"></h5>
                </div>
                <div class="row">
                    <h5>RG</h5> <h5 id="dadoRg"></h5>
                </div>
                <div class="row">
                    <h5>Data de nascimento:</h5> <h5 id="dadoDtNasc"></h5>
                </div>
                <div class="row">
                    <h5>Email:</h5> <h5 id="dadoEmail"></h5>
                </div>
                <div class="row">
                    <h5>Telefone:</h5> <h5 id="dadoTelefone"></h5>
                </div>
                <div class="row">
                    <h5>Cargo:</h5> <h5 id="dadoCargo"></h5>
                </div>
                <div class="row">
                    <h5>Setor de atuação:</h5> <h5 id="dadoSetor"></h5>
                </div>
            </div>
        </div>
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
