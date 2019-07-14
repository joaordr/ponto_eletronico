<div class="row">

  <div class="col"></div>
  <div class="col">
    <button type="button" onclick="load_modal();" class="btn btn-warning" data-toggle="modal" data-target="#modalUpdateEmpresa">Alterar</button>
  </div>
  <div class="col"></div>
</div>
<div class="row">
    <div class="col"></div>
    <div class="col">
        <div class="panel panel-default jumbotron">
            <div class="panel-body">
                <h4 id="nomeEmpresa"></h4>
                <h5 id="cnpj_value"></h5>
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
                        <button type="submit" class="btn btn-primary">Alterar</button>
                    </form>
            </div>
        </div>
    </div>
</div>

  <style type="text/css">
     .panel{
      margin-top: 15px;
      border: 1px solid #D3D3D3;
      width: 500px
     }
     button{
      margin-top: 20px;
      margin-left: 130px;
     }
     h4, h5{
      text-align: justify;
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