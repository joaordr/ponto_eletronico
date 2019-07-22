$(document).ready(function(){
    $("#cnpj").mask("00.000.000/0000-00", {reverse: true});
    $("#telefone").mask("(00)0000-0000");
    $("#cadEmpresa").validate({
          rules: {
            nome: {
              maxlength: 50,
              maxWords: 5,
              depends: function(){
                $("#nome").css("border", "1px solid #8C1717"); }
            },
            razaoSocial: {
              required: true,
              maxlength: 80,
              maxWords: 5,
              depends: function(){
                $("#razaoSocial").css("border", "1px solid #8C1717"); }
            },
            cnpj: {
              required: true,
              cnpjBR: true,
              depends: function(){
                $("#cnpj").css("border", "1px solid #8C1717"); }
            }, 
            ramo: {
              maxlength: 100,
              maxWords: 5,
              depends: function(){
                $("#ramo").css("border", "1px solid #8C1717"); }
            },
            telefone: {
              required: true,
              maxlength: 14,
              depends: function(){
                $("#telefone").css("border", "1px solid #8C1717"); }
            }
          },
          messages: {
            nome: {
              maxlength: "O campo pode ter no máximo 50 caracteres",
              maxWords: "O campo pode ter no máximo 5 palavras"
            },
            razaoSocial: {
              required: "Campo obrigatório",
              maxlength: "O campo pode ter no máximo 80 caracteres",
              maxWords: "O campo pode ter no máximo 5 palavras"
            },
            cnpj: {
              required: "Campo obrigatório",
              cnpjBR: "Digite um cnpj válido"
            }, 
            ramo: {
              maxlength: "O campo pode ter no máximo 100 caracteres",
              maxWords: "O campo pode ter no máximo 5 palavras"
            },
            telefone: {
              required: "Campo obrigatório",
              maxlength: "Informe um número de telefone valido"
            }
          }
        })
      });