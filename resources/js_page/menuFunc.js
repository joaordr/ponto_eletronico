function logout() {
    window.location.replace("../index.php");
}

var table = $("#tabela1");

var numero_registro;

function select_button(button, numero) {
    numero_registro = numero;
    $(".btn").removeAttr('style');
    button.css("background-color", "green");
}

function gravar_registro() {
    let retorno = request("registro", ("tipo=" + numero_registro + "&create=true"));
    if (retorno) {
        $(".btn").removeAttr('style');
        load_registros();
    } else {
        alert("Erro ao gravar registro!")
    }
}

function load_registros() {
    let retorno = request("registro", "load=true");
    if (retorno) {
        $("#tabela1>tbody>tr").remove(); // limpa a tabela

        $.each(retorno, function (index, value) {
            var newRow = $("<tr>");
            var cols = "";
            cols += '<td>' + value[0].data + '</td>';
            for (i = 0; i < value.length; i++) {
                cols += '<td>' + value[i].hora + '</td>';
            }

            newRow.append(cols);
            table.append(newRow);
        });

    }
    console.log(retorno);
}

$(document).ready(function () {
    load_registros();
});