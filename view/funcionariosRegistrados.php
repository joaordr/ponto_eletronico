
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">CPF</th>
      <th scope="col">Telefone</th>
      <th scope="col">Cargo</th>
      <th scope="col">Setor</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalTabela"><i class="fa fa-eye"></i></button></td>
      <td><button type="button" class="btn btn-danger">Excluir</button></td>
    </tr>
  </tbody>
</table>

<!-- Modal Tabela de Registros do funcionario -->
<div class="modal fade" id="modalTabela" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header ">
                <h5 class="modal-title" id="exampleModalLabel">Registros do Funcionário</h5>
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
<style type="text/css">
  
</style>