<div class="row">
    <div class="col"></div>
    <div class="col-lg-6">
        <div class="panel panel-default ">
            <div class="panel-body">
              <div class="row">
                 <h4>Nome Fantasia:</h4><h4 id="nomeEmpresa"></h4>
              </div>
              <div class="row">
                 <h4>Razão Social:</h4><h4 id="razaoSocialEmp"></h4>
              </div>
              <div class="row">
                 <h4>CNPJ: </h4><h4 id="cnpj_value"></h4>
              </div>
            </div>
        </div>
    </div>
    <div class="col"></div>
</div>
<div class="row">
  <div class="col"></div>
  <div class="col">
    <button type="button" onclick="load_modal();" class="btn btn-warning btn-lg btn-block" data-toggle="modal" data-target="#modalUpdateEmpresa"><h5>Alterar dados da empresa</h5></button>
  </div>
  <div class="col"></div>
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
                        <div class="form-group">
                            <label for="nome">Nome da empresa</label>
                            <input type="text" name="nome" id="nome" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="razaoSocial">Razão Social</label>
                            <input type="text" name="razaoSocial" id="razaoSocial" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="cnpj">CNPJ</label>
                            <input type="text" name="cnpj" id="cnpj" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="ramo">Ramo de atividade</label>
                            <input type="text" name="ramo" id="ramo" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="telefone">Telefone</label>
                            <input type="text" name="telefone" id="telefone" class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary btn-lg">Alterar</button>
                    </form>
            </div>
        </div>
    </div>
</div>

  <style type="text/css">
     .panel{
      box-shadow: 20px 30px 50px #808080;
      margin-top: 15px;
      background-color: #fff;
      padding: 25px;
     }
     button{
      margin-top: 20px;
      margin-left: 130px;
     }
     h4{
       margin-right: 10px;
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