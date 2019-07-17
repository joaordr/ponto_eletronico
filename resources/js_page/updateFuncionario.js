var funcionario;

function load_modal_editar() {
    $("#nome").val(funcionario.nome);
    $("#cpf").val(funcionario.cpf);
    $("#rg").val(funcionario.cpf);
    $("#dtNasc").val(funcionario.dataNascimento);
    $("#email").val(funcionario.email);
    $("#telefone").val(funcionario.telefone);
    $("#cargo").val(funcionario.cargo);
    $("#setor").val(funcionario.setor);
}

function lista_dados(){
	let retorno = request("funcionario", 'list_dados=true');
    if (retorno) {
        $("#dadoNome").text(retorno.nome);
        $("#dadoCpf").text(retorno.cpf);
        $("#dadoRg").text(retorno.rg);
        $("#dadoDtNasc").text(retorno.dataNascimento);
        $("#dadoEmail").text(retorno.email);
        $("#dadoTelefone").text(retorno.telefone);
        $("#dadoCargo").text(retorno.cargo);
        $("#dadoSetor").text(retorno.setor);
        funcionario = retorno;
    } else {
        alert("Erro ao carregar dados da funcionario!");
    }
}

function lista_nome_logado(){
	let retorno = request("funcionario", "list_dados=true");
	if(retorno){
		$("#nomeFunc").text(retorno.nome);
	}
}

$(document).ready(function(){
    lista_nome_logado();
    lista_dados();

    $("#updateFuncionario").submit(function (e) {
        let dados = $(this).serialize() + "&update=true";
        let retorno = request("funcionario", dados);
        if (retorno) {
            lista_dados();
            $("#modalUpdate").modal("hide");
        } else {
            alert("Erro ao editar funcionário!");
        }
        e.preventDefault();
        return false;
    });
});