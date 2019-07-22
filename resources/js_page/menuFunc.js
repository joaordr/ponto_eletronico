function logout() {
    $.confirm({
            columnClass: 'small',
            title: 'Deseja mesmo encerrar seção??',
            content: 'Se sim, clique no botão encerrar.',
            buttons: {
                encerrar: {
                    text: 'Encerrar',
                    action: function () {
                        window.location.replace("../index.php");
                    }
                },
                cancelar: {
                    text: 'Cancelar',
                    action: function(){}
                }
            }
        });
}

var table = $("#tabela1");
var funcionario;
var numero_registro;

function select_button(button, numero) {
    numero_registro = numero;
    $(".btn").removeAttr('style');
    button.css("background-color", "green");
}

function gravar_registro() {
    let retorno = request("registro", ("tipo=" + numero_registro + "&create=true"));
    if (retorno) {
        if (retorno == "not allowed") {
            $.confirm({
                columnClass: 'small',
                title: 'ERRO!',
                icon: 'fa fa-exclamation-triangle',
                content: 'Horário já registrado.',
                type: 'red',
                typeAnimated: true,
                buttons: {
                    ok: {
                        text: 'Ok',
                        btnClass: 'btn-red',
                        action: function(){
                        }
                    }
                }
            });
        } else {
            $.confirm({
                columnClass: 'small',
                title: 'Confirmação!',
                icon: 'fa fa-check-double',
                content: 'Registro gravado com sucesso',
                type: 'green',
                typeAnimated: true,
                buttons: {
                    ok: {
                        text: 'Ok',
                        btnClass: 'btn-green',
                        action: function(){
                        }
                    }
                }
            });
            load_registros();
            $(".btn").removeAttr('style');
        }
    } else {
        $.confirm({
            title: 'ERRO!',
            content: 'Erro ao gravar registro. Informe ao administrador.',
            type: 'red',
            typeAnimated: true,
            buttons: {
                ok: {
                    text: 'Ok',
                    btnClass: 'btn-red',
                    action: function(){
                    }
                },
                close: function () {
                }
            }
        });
    }
}

function load_registros() {
    let retorno = request("registro", "load=true");
    if (retorno) {
        if (retorno == true) {
            return;
        }

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
}


$(document).ready(function () {
    load_registros();
});
