function logout() {
    window.location.replace("../index.php");
}

function select_button(button) {
    $(".btn").removeAttr('style');
    button.css("background-color", "green");
}