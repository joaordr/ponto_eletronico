function validarForm(formulario){
	$(document).ready(function(){
                $("#formEmp").validate({
                    rules:{
                         nomeEmp: {
                             required: true,
                             maxlength: 100,
                             minlength: 5
                         },
                         cnpjEmp: {
                             required: true,
                             maxlength: 19,
                             minlength: 19,
                             cnpjBR: true
                         },
                         ramoEmp:{
                            maxlength: 100,
                            minlength: 5,
                            required: true
                         },
                         emailEmp:{
                            email:true,
                            required: true,
                            maxlength: 100
                         },
                         telefoneEmp:{
                            maxlength: 13,
                            minlength: 13,
                            required: true
                         }
                     }
                })
            })
}
           