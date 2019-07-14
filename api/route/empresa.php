<?php
include_once '../php_config.php';
include_once '../autoloader.php';

try {
    $controle = new EmpresaControle();
    if (isset($_POST['create'])) {
        $emrpesa = new Empresa();


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