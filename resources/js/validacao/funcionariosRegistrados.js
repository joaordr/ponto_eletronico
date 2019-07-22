$(document).ready(function(){
	$("#cpf").mask("000.000.000-00", {reverse:true});
    $("#rg").mask("00.000.000-0", {reverse:true});
    $("#telefone").mask("(00)00000-0000", {reverse:true});

    $("#updateFuncionario").validate({
        rules:{
            nome: {
                required: true,
                maxlength: 80,
                depends: function(){
                    $("#nome").css("border", "1px solid #8C1717"); }
            },
            cpf: {
                cpfBR: true,
                required: true,
                depends: function(){
                    $("#cpf").css("border", "1px solid #8C1717"); }
            },
            rg:{
                required: true,
                depends: function(){
                    $("#rg").css("border", "1px solid #8C1717"); }
            },
            dtNasc:{
                required: true,
                date: true,
                depends: function(){
                    $("#dtNasc").css("border", "1px solid #8C1717"); }
            },
            email:{
                required: true,
                email: true,
                depends: function(){
                    $("#email").css("border", "1px solid #8C1717"); }
            },
            telefone:{
                required: true,
                maxlength: 14,
                depends: function(){
                    $("#telefone").css("border", "1px solid #8C1717"); }
            },
            cargo:{
                required: true,
                maxlength: 100,
                depends: function(){
                    $("#cargo").css("border", "1px solid #8C1717"); }
            },
            setor:{
                required: true,
                maxlength: 100,
                depends: function(){
                    $("#setor").css("border", "1px solid #8C1717"); }
            }
        },
        messages: {
            nome: {
                required: "Campo Obrigatório",
                maxlength: "O campo pode ter no máximo 80 caracteres",
            },
            cpf: {
                required: "Campo Obrigatório",
                cpfBR: "Informe um cpf válido"
            },
            rg:{
                required: "Campo Obrigatório",
            },
            dtNasc:{
                required: "Campo Obrigatório",
                date: "Informe uma data válida"
            },
            email:{
                required: "Campo Obrigatório",
                email: "Informe um email válido"
            },
            telefone:{
                required: "Campo Obrigatório",
                maxlength: "O campo pode ter no máximo 14 caracteres",
            },
            cargo:{
                required: "Campo Obrigatório",
                maxlength: "O campo pode ter no máximo 100 caracteres",
            },
            setor:{
                required: "Campo Obrigatório",
                maxlength: "O campo pode ter no máximo 100 caracteres",
            }
        }
    })
});