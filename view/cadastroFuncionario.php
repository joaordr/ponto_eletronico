<div class="row">
    <div class="col"></div>
    <div class="col-lg-6">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h5>Cadastro de funcionário e usuário</h5>
            </div>
            <div class="panel-body">
                <form name="cadFuncionario1" id="cadFuncionario1">
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                        <label for="nome">Nome completo</label>
                        <div class="input-group">
                            <div class="input-group-prepend">
                              <div class="input-group-text"><i class="fa fa-user"></i></div>
                            </div>
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>
                    </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="cpf">CPF</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-id-card"></i></div>
                                    </div>
                                    <input type="text" name="cpf" id="cpf" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="rg">RG</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-id-card"></i></div>
                                    </div>
                                    <input type="text" name="rg" id="rg" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="dtNasc">Data de Nascimento</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                    </div>
                                    <input type="date" name="dtNasc" id="dtNasc" class="form-control">
                                </div>
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
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-envelope"></i></div>
                                    </div>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="cargo">Cargo</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-briefcase"></i></div>
                                    </div>
                                    <input type="text" name="cargo" id="cargo" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col">
                            <div class="form-group">
                                <label for="setor">Setor</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-table"></i></div>
                                    </div>
                                    <input type="text" name="setor" id="setor" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="nomeUsuario">Nome de Usuário</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-user-plus"></i></div>
                                    </div>
                                    <input type="text" name="nomeUsuario" id="nomeUsuario" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <div class="form-group">
                                <label for="senhaFunc">Senha</label>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                      <div class="input-group-text"><i class="fa fa-lock"></i></div>
                                    </div>
                                    <input type="text" name="senhaFunc" id="senhaFunc" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="col"></div>
</div>
<script type="text/javascript" src="../resources/js_page/cadastroFuncionario.js"></script>

<style type="text/css">
    .panel {
        margin-top: -10px;
        padding: 20px;
        background-color: #fff;
        box-shadow: 20px 20px 50px #808080;
        border-radius: 5px;
        margin-bottom: 30px;
    }
    .panel-heading{
        background-color: #333;
        color: #fff;
        padding: 10px;
        margin: -20px -20px 20px -20px; /*superior, direita, inferior, esquerda*/
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
    }
</style>
