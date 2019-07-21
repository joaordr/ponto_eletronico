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
});