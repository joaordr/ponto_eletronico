$(document).ready(function(){
  $("#updateEmpresa").validate({
      rules: {
          nome: {
            maxlength: 50,
            maxWords: 5
          },
          razaoSocial: {
            required: true,
            maxlength: 80,
            maxWords: 5
          },
          cnpj: {
            required: true,
            cnpjBR: true
          }, 
          ramo: {
            maxlength: 100,
            maxWords: 20
          },
          telefone: {
            required: true,
            maxlength: 10
          }
      }
  });
});