$(document).ready(function () {
    $("#senhaLoginCon").keyup(function () {
        console.log('teste');
        let val1 = $("#senhaLoginCad").val();
        let val2 = $("#senhaLoginCon").val();
        if (val2.length >= val1.length && val1 != val2) {
            $("#senhaLoginCon").css("border-color", "red");
        } else if (val1.length >= 1 && val1 == val2) {
            $("#senhaLoginCon").css("border-color", "green");
        }else{
            $("#senhaLoginCon").removeAttr( 'style' );

        }
    })

});