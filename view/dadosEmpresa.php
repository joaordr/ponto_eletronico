<button type="button" class="btn btn-success" data-toggle="modal" data-target="#modalCadEmpresa">+ Adicionar Empresa</button>
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Razao Social</th>
      <th scope="col">Cnpj</th>
      <th scope="col">Ramo de Atividade</th>
      <th scope="col">Telefone</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>4587458745</td>
      <th scope="col"><button type="button" class="btn btn-warning">Update</button></th>
      <th scope="col"><button type="button" class="btn btn-danger">Delete</button></th>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
      <td>4587458745</td>
      <th scope="col"><button type="button" class="btn btn-warning">Update</button></th>
      <th scope="col"><button type="button" class="btn btn-danger">Delete</button></th>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
      <td>4587458745</td>
      <th scope="col"><button type="button" class="btn btn-warning">Update</button></th>
      <th scope="col"><button type="button" class="btn btn-danger">Delete</button></th>
    </tr>
  </tbody>
</table>

<!-- Modal login Funcionario -->
<div class="modal fade" id="modalCadEmpresa" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Cadastrar Empresa</h5>
            </div>
            <div class="modal-body">
                <form name="formEntrar" id="formEntrar" method="POST">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="razaoSocial">Razão Social</label>
                        <input type="text" name="razaoSocial" id="razaoSocial" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="cnpj">Cnpj</label>
                        <input type="text" name="cnpj" id="cnpj" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="ramo">Ramo de Atividade</label>
                        <input type="text" name="ramo" id="ramo" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="tel">Telefone</label>
                        <input type="text" name="tel" id="tel" class="form-control">
                    </div>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                    <button type="button" class="btn btn-success">Cadastar</button>
                </form>
            </div>
            <div class="modal-footer">
                
            </div>
        </div>
    </div>
</div>