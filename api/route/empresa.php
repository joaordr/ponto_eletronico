<?php
include_once '../php_config.php';
include_once '../autoloader.php';

try {
    $controle = new EmpresaControle();
    if (isset($_POST['create'])) {
        $empresa = new Empresa();
        $empresa->setNome(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
        $empresa->setRazaoSocial(filter_input(INPUT_POST, 'razaoSocial', FILTER_SANITIZE_STRING));
        $empresa->setCnpj(filter_input(INPUT_POST, 'cnpj', FILTER_SANITIZE_STRING));
        $empresa->setRamoAtividade(filter_input(INPUT_POST, 'ramo', FILTER_SANITIZE_STRING));
        $empresa->setTelefone(filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING));

        $funcionario = unserialize($_SESSION['funcionarioLogadoAdmin']);
        $controle->save($empresa, $funcionario);

        http_response_code(200);
        die();
    }

    if (isset($_POST['load'])) {
        $empresa = unserialize($_SESSION['empresaLogadoAdmin']);
        echo json_encode($empresa->toArray());
        die();
    }

    http_response_code(404);
} catch (Exception $ex) {
    http_response_code(500);
    echo json_encode($ex->getMessage());
} finally {
    die();
}