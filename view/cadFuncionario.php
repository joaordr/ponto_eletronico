<!DOCTYPE html>
<html>
<head>
    <title>Administrador</title>
    <link rel="icon" type="imagem/png" href="../resources/img/icone.png"/>
	 <title>Cadastro de Administrador</title>
	<link rel="icon" type="imagem/png" href="../resources/img/icone.png" />
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
    <script type="text/javascript" src="../resources/js/validacao/cadFuncionario.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../resources/bootstrap/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="../resources/css/cadFuncionario.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--tag meta viewport responsiva-->
    <script type="text/javascript" src="../resources/js/spaFunc.js"></script>

</head>
<body style="background-color: #F7F5FE;">
<div class="container">
    <div class="row">
        <div class="col"></div>
        <div class="col-lg-6">
            <div class="panel panel-default jumbotron">
                <div class="panel-heading">
                  <h5>Cadastro de Administrador</h5>
                </div>
                <div class="panel-body">
                    <form name="cadFuncionario" id="cadFuncionario" method="POST">
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
                            </div>
                            <label for="cpf" generated="true" class="error"></label>
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
                                      <div class="input-group-text"><i class="fa fa-dice-d6"></i></div>
                                    </div>
                                    <input type="text" name="setor" id="setor" class="form-control">
                                </div>
                            </div>
                            <label for="setor" generated="true" class="error"></label>
                              </div>
                        </div>
                        <div class="row">
                           <div class="col">
                               <button type="submit" class="btn btn-primary btn-lg btn-block" id="trocaNome">Cadastrar</button>
                           </div>
                        </div>
                    </form>
                  </div>
                </div>
            </div>
        
        <div class="col"></div>
    </div>
</div>
<script type="text/javascript" src="../resources/js/request_api.js"></script>
<script type="text/javascript" src="../resources/js_page/cadastroAdm.js"></script>
</body>
</html>