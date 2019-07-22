<link rel="stylesheet" type="text/css" href="../resources/css/dadosEmpresa.css">
<script type="text/javascript" src="../resources/jquery_mask/jquery.mask.min.js"></script>
<script type="text/javascript" src="../resources/js/validacao/dadosEmpresa.js"></script>
<div class="row">
    <div class="col"></div>
    <div class="col-lg-6">
        <div class="panel panel-default ">
            <div class="panel-heading">
              <div class="row">
                <div class="col">
                  <h4 id="title">Dados da empresa</h4>
                </div>
                
                <div class="col">
                   <button type="button" id="alteraEmpresa" onclick="load_modal();" class="btn btn-warning" data-toggle="modal" data-target="#modalUpdateEmpresa" style="margin-top: -3px;"><i class="fa fa-edit"></i> Editar</button>
                </div>
              </div>
               

            </div>
            <div class="panel-body">
              <div class="row info">
                 <h4>Nome da empresa:</h4><h4 id="nomeEmpresa"></h4>
              </div>
              <div class="row info">
                 <h4>Razão Social:</h4><h4 id="razaoSocialEmp"></h4>
              </div>
              <div class="row info">
                 <h4>CNPJ: </h4><h4 id="cnpj_value"></h4>
              </div>
            </div>
        </div>
    </div>
    <div class="col"></div>
</div>


<!-- Modal update empresa -->
<div class="modal fade" id="modalUpdateEmpresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Alterar empresa</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                <span aria-hidden="true">&times;</span>
            </div>
            <div class="modal-body">
                <form name="updateEmpresa" id="updateEmpresa" method="POST">
                    <div class="row">
                      <div class="col-lg-12 col-md-12">
                          <div class="form-group">
                            <label for="nome">Nome da empresa</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-briefcase"></i></div>
                                </div>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>
                          </div>
                          <label for="nome" generated="true" class="error"></label>
                      </div>
                    </div>
                    <div class="row">
                       <div class="col-lg-12 col-md-12">
                          <div class="form-group">
                            <label for="razaoSocial">Razão Social</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-briefcase"></i></div>
                                </div>
                                <input type="text" name="razaoSocial" id="razaoSocial" class="form-control">
                            </div>
                          </div>
                          <label for="razaoSocial" generated="true" class="error"></label>
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-lg-12 col-md-12">
                          <div class="form-group">
                            <label for="cnpj">CNPJ</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-address-card"></i></div>
                                </div>
                                <input type="text" name="cnpj" id="cnpj" class="form-control">
                            </div>
                        </div>
                        <label for="cnpj" generated="true" class="error"></label>
                       </div>
                    </div>
                    <div class="row">
                       <div class="col-lg-6 col-md-12">
                          <div class="form-group">
                            <label for="ramo">Ramo de atividade</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="fa fa-cubes"></i></div>
                                </div>
                                <input type="text" name="ramo" id="ramo" class="form-control">
                            </div>
                          </div>
                       </div>
                       <label for="ramo" generated="true" class="error"></label>
                       <div class="col-lg-6 col-md-12">
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
                        <button type="submit" class="btn btn-primary btn-block">Alterar dados</button>
                    </div>   
                  </form>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript" src="../resources/js_page/dadosEmpresa.js"></script>

