$(document).ready(function(){
  $("#cnpj").mask("00.000.000/0000-00", {reverse: true});
  $("#telefone").mask("(00)0000-0000");

  $("#updateEmpresa").validate({
      rules: {
          nome: {
            maxlength: 3,
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
            maxWords: 20,
            depends: function(){
                $("#ramo").css("border", "1px solid #8C1717"); }
          },
          telefone: {
            required: true,
            maxlength: 14,
            depends: function(){
                $("#telefone").css("border", "1px solid #8C1717"); }
          }
      }
  });
});