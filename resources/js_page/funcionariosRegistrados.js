var funcionarios;
var table = $("#tabela1");
var table_registros = $("#tableReg");
var funcionario;

var funcionarioEdicao;


function load_funcionarios() {
    let retorno = request("funcionario", "list_func=true");
    $("#tabela1>tbody>tr").remove();  // limpa a tabela
    if (retorno) {
        funcionarios = retorno;
        $.each(funcionarios, function (index, value) {
            var newRow = $("<tr>");
            var cols = "";
            cols += '<th scope="row">' + (index + 1) + '</th>';
            cols += '<td>' + value.nome + '</td>';
            cols += '<td>' + value.cpf + '</td>';
            cols += '<td>' + value.telefone + '</td>';
            cols += '<td>' + value.cargo + '</td>';
            cols += '<td>' + value.setor + '</td>';
            cols += '<td><button type="button" class="btn btn-warning" data-toggle="modal" data-target="#modalTabela" onclick="load_modal_registros(' + index + ');"><i class="fa fa-eye"></i></button></td>';
            cols += '<td><button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalUpdate" onclick="load_modal_editar(' + index + ');"><i class="fa fa-edit"></i> Editar</button></td>';
            cols += '<td><button type="button" onclick="delete_func(' + index + ')" class="btn btn-danger"><i class="fa fa-trash"></i> Excluir</button></td>';

            newRow.append(cols);
            table.append(newRow);
        });

    }
    console.log(retorno);
}

function delete_func(index) {
    if (confirm("Tem certeza que deseja excluir esse funcionário?")) {
        let user_id = funcionarios[index].usuario;
        let retorno = request("funcionario", ("userId=" + user_id + "&delete=true"));
        if (retorno) {
            load_funcionarios();
        } else {
            alert("Erro ao excluir funcionario!");
        }
    }
}

function load_modal_editar(index) {
    funcionarioEdicao = funcionarios[index];
    //alert(index);
    let func = funcionarios[index];
    $("#nome").val(func.nome);
    $("#cpf").val(func.cpf);
    $("#rg").val(func.rg);
    $("#dtNasc").val(func.dataNascimento);
    $("#email").val(func.email);
    $("#telefone").val(func.telefone);
    $("#cargo").val(func.cargo);
    $("#setor").val(func.setor);
    //usuario = func.usuario;
    //alert(usuario);
    //$("#nomeUsuario").val(usuario.user);
    //$("#senhaFunc").val(usuario.senha);

}

function load_modal_registros(index) {
    let id = funcionarios[index].id;
    let retorno = request("registro", ("id=" + id + "&load_registro_func=true"));
    console.log(retorno);
    if (retorno) {
        if (retorno == true) {
            return;
        }

        $("#tableReg>tbody>tr").remove();

        $.each(retorno, function (index, value) {
            var newRow = $("<tr>");
            var cols = "";
            cols += '<td>' + value[0].data + '</td>';
            for (i = 0; i < value.length; i++) {
                cols += '<td>' + value[i].hora + '</td>';
            }

            newRow.append(cols);
            table_registros.append(newRow);
        });

    }
}


$(document).ready(function () {
    $("#updateFuncionario").submit(function (f) {
        let dados = $(this).serialize() + "&id=" + funcionarioEdicao.id + "&update=true";
        let retorno = request("funcionario", dados);
        if (retorno) {
            load_funcionarios();
            $("#modalUpdate").modal("hide");
            alert("Alterado com sucesso");
        } else {
            alert("Erro ao editar funcionario!");
        }
        f.preventDefault();
        return false;
    });
    load_funcionarios();
});


