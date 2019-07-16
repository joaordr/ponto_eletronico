<table class="table" id="tabela1">
    <thead class="thead-dark">
    <tr>
        <th scope="col">#</th>
        <th scope="col">Nome</th>
        <th scope="col">CPF</th>
        <th scope="col">Telefone</th>
        <th scope="col">Cargo</th>
        <th scope="col">Setor</th>
        <th scope="col"></th> <!--visualizar-->
        <th scope="col"></th> <!--editar-->
        <th scope="col"></th> <!--excluir-->
    </tr>
    </thead>
    <tbody>
    </tbody>
</table>

<!-- Modal Tabela de Registros do funcionario -->
<div class="modal fade" id="modalTabela" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">Registros do Funcionário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead class="thead-dark">
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Dia/Mês</th>
                        <th scope="col">Entrada 1</th>
                        <th scope="col">Saida 1</th>
                        <th scope="col">Entrada 2</th>
                        <th scope="col">Saida 2</th>
                        <th scope="col">Entrada 3</th>
                        <th scope="col">Saida 3</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>1 de Julho</td>
                        <td>08:00</td>
                        <td>12:00</td>
                        <td>13:00</td>
                        <td>17:00</td>
                        <td>17:00</td>
                        <td>17:30</td>
                    </tr>
                    </tbody>
                </table>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
            </div>
        </div>
    </div>
</div>

<!--modal update funcionario-->
<div class="modal fade" id="modalUpdateFunc" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Atualizar daddos do Funcionário</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </div>
            <div class="modal-body">
                <form name="updateFuncionario" id="updateFuncionario">
                    <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-user"></i></div>
                            </div>
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cpf">CPF</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-id-card"></i></div>
                            </div>
                            <input type="text" name="cpf" id="cpf" class="form-control">
                        </div>
                        
                    </div>
                    <div class="form-group">
                        <label for="rg">RG</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-id-card"></i></div>
                            </div>
                            <input type="text" name="rg" id="rg" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dtNasc">Data de Nascimento</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-calendar-alt"></i></div>
                            </div>
                            <input type="date" name="dtNasc" id="dtNasc" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                            </div>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="telefone">Telefone</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-phone-alt"></i></div>
                            </div>
                            <input type="text" name="telefone" id="telefone" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="cargo">Cargo</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-briefcase"></i></div>
                            </div>
                            <input type="text" name="cargo" id="cargo" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="setor">Setor</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-dice-d6"></i></div>
                            </div>
                            <input type="text" name="setor" id="setor" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="nomeUsuario">Nome de Usuário</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-user-plus"></i></div>
                            </div>
                            <input type="text" name="nomeUsuario" id="nomeUsuario" class="form-control">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="senhaFunc">Senha</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-lock"></i></div>
                            </div>
                            <input type="text" name="senhaFunc" id="senhaFunc" class="form-control">
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                </form>
            </div>
        </div>
    </div>
</div>


<script type="text/javascript" src="../resources/js_page/funcionariosRegistrados.js"></script>


<style type="text/css">
    #tabela1 {
        margin-top: 50px;
    }

    #modalTabela {
        width: 1000px;
        margin-left: 200px;
    }
</style>