<?php
include_once '../php_config.php';
include_once '../autoloader.php';

try {
    $controle = new UsuarioControle();
    //cria adm
    if (isset($_POST['create_adm'])) {
        $usuario = new Usuario();
        $usuario->setUser(filter_input(INPUT_POST, 'userLogin', FILTER_SANITIZE_STRING));
        $usuario->setSenha(filter_input(INPUT_POST, 'senhaLogin', FILTER_SANITIZE_STRING));
        $usuario->setEmail(filter_input(INPUT_POST, 'emailLogin', FILTER_SANITIZE_STRING));
        $usuario->setTipo(1);
        $controle->save($usuario);
        http_response_code(200);
        die();
    }

    http_response_code(404);
} catch (Exception $ex) {
    http_response_code(500);
    echo json_encode($ex->getMessage());
} finally {
    die();
}
