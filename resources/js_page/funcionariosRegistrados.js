var funcionarios;

var table = $("#tabela1");

function load_funcionarios() {
    let retorno = request("funcionario", "list_func=true");
    if (retorno) {
        funcionarios = retorno;
        $("#tabela1>tbody>tr").remove(); // limpa a tabela

        $.each(funcionarios, function (index, value) {
            var newRow = $("<tr>");
            var cols = "";
            cols += '<th scope="row">' + (index + 1) + '</th>';
            cols += '<td>' + value.nome + '</td>';
            cols += '<td>' + value.cpf + '</td>';
            cols += '<td>' + value.telefone + '</td>';
            cols += '<td>' + value.cargo + '</td>';
            cols += '<td>' + value.setor + '</td>';
            cols += '<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalTabela"><i class="fa fa-eye"></i></button></td>';
            cols += '<td><button type="button" class="btn btn-primary"><i class="fa fa-pencil"></i> Editar</button></td>';
            cols += '<td><button type="button" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</button></td>';

            newRow.append(cols);
            table.append(newRow);
        });

    }
    console.log(retorno);
}

function load_modal_registros() {

}


$(document).ready(function () {
    load_funcionarios();

});