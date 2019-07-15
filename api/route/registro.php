<?php
include_once '../php_config.php';
include_once '../autoloader.php';

try {
    $controle = new RegistroControle();
    if (isset($_POST['create'])) {
        $tipo = filter_input(INPUT_POST, 'tipo', FILTER_SANITIZE_NUMBER_INT);
        $funcionario = unserialize($_SESSION['funcionarioLogadoFunc']);

        $retorno = $controle->create($tipo, $funcionario);
        if ($retorno != null) {
            echo json_encode($retorno);
        } else {
            http_response_code(200);
        }
        die();
    }

    if (isset($_POST['load'])) {
        $funcionario = unserialize($_SESSION['funcionarioLogadoFunc']);

        $retorno = $controle->load($funcionario);
        echo json_encode($retorno);
        die();
    }

    http_response_code(404);
} catch (Exception $ex) {
    http_response_code(500);
    echo json_encode($ex->getMessage());
} finally {
    die();
}