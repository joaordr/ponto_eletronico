function request(function_file, dados, sincrono = false) {
    try {
        let retorno = false;

        $.ajax({
            // parametros
            type: "POST",
            url: "api/route/" + function_file + ".php",
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