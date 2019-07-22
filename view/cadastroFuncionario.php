<link rel="stylesheet" type="text/css" href="../resources/css/cadastroFuncionario.css">
<script type="text/javascript" src="../resources/jquery_mask/jquery.mask.min.js"></script>
<script type="text/javascript" src="../resources/js/pace.min.js"></script>
<link rel="stylesheet" type="text/css" href="../resources/css/pace.css">
<script type="text/javascript" src="../resources/js/validacao/cadastroFuncionario.js"></script>

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
                                       <div class="input-group-text" id="iconUser"><i class="fa fa-user"></i></div>
                                    </div>
                                    <input type="text" name="nome" id="nome" class="form-control">                                
                                </div>
                            </div>
                            <label for="nome" generated="true" class="error"></label>
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
                                <label for="cpf" generated="true" class="error"></label>
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
                            <label for="rg" generated="true" class="error"></label>
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
                            <label for="dtNasc" generated="true" class="error"></label>
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
                            <label for="telefone" generated="true" class="error"></label>
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
                            <label for="email" generated="true" class="error"></label>
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
                            <label for="cargo" generated="true" class="error"></label>
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
                            <label for="setor" generated="true" class="error"></label>
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
                            <label for="nomeUsuario" generated="true" class="error"></label>
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
                            <label for="senhaFunc" generated="true" class="error"></label>
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
