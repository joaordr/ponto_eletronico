function logout() {
	$.confirm({
			columnClass: 'small',
		    title: 'Deseja mesmo encerrar seção?',
		    icon: 'fa fa-sign-out-alt',
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