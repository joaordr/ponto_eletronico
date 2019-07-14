<?php
include_once '../php_config.php';
include_once '../autoloader.php';

try {
    $controle = new LoginControle();
    if (isset($_POST['login_adm'])) {
        $userName = filter_input(INPUT_POST, 'userLogin', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senhaLogin', FILTER_SANITIZE_STRING);
        $retorno = $controle->loginAdm($userName, $senha);
        echo json_encode($retorno);
        http_response_code(200);
        die();
    }

    if (isset($_POST['login_func'])) {
        $userName = filter_input(INPUT_POST, 'userLogin', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senhaLogin', FILTER_SANITIZE_STRING);
        $retorno = $controle->loginFunc($userName, $senha);
        echo json_encode($retorno);
        http_response_code(200);
        die();
    }

    http_response_code(404);
} catch (Exception $ex) {
    http_response_code(500);
    echo json_encode($this->getMessage());
} finally {
    die();
}
