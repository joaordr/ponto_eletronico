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

  <style type="text/css">
      @media (min-width: 992px) {
         #alteraEmpresa{
          margin-left: 210px;
         }
      }
     .panel{
      box-shadow: 20px 30px 50px #808080;
      margin-top: 15px;
      background-color: #fff;
      padding: 10px 0px 10px 25px;
      border-radius: 5px;
     }
     button{
      margin-top: 20px;
      margin-left: 130px;
     }
     h4{
       margin-right: 10px;
     }

     .panel-heading{
        background-color: #333;
        padding: 10px;
        margin-top: -10px;
        margin-left: -25px;
        margin-bottom: 20px;
        border-top-right-radius: 5px;
        border-top-left-radius: 5px;
     }
     .panel-heading h4{
        color: #fff;
     }
     .info{
        margin-top: 5px;
        margin-bottom: 5px;
     }
     #nomeEmpresa, #razaoSocialEmp, #cnpj_value{
        font-weight: normal;
     }


  </style>



<script type="text/javascript" src="../resources/js_page/dadosEmpresa.js"></script>

<script type="text/javascript">
  $(document).ready(function(){
    $("#updateEmpresa").validate({
      rules: {
        nome: {
              maxlength: 50,
              maxWords: 5
            },
            razaoSocial: {
              required: true,
              maxlength: 80,
              maxWords: 5
            },
            cnpj: {
              required: true,
              cnpjBR: true
            }, 
            ramo: {
              maxlength: 100,
              maxWords: 20
            },
            telefone: {
              required: true,
              maxlength: 10
            }
      }
    })
  })
</script>