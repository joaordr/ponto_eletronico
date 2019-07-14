function request(function_file, dados, inicio_url = false, sincrono = false) {
    try {
        let retorno = false;
        let url = '';
        if (inicio_url) {
            url = "api/route/";
        } else {
            url = "../api/route/";
        }
        $.ajax({
            // parametros
            type: "POST",
            url: url + function_file + ".php",
            data: dados,
            dataType: "json",
            async: sincrono,
            success: function (response) {
                retorno = response;
            },
            error: function (xhr) {
                if (xhr.status == 200) {
                    retorno = true;
                } else {
                    console.log(xhr.status);
                    console.log(xhr);
                }
            }
        });
        return retorno;
    } catch (e) {
        console.log(e);
    }
}