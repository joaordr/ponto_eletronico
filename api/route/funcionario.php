<?php
include_once '../php_config.php';
include_once '../autoloader.php';

try {
    $controle = new FuncionarioControle();

    if (isset($_POST['create_adm'])) {
        $funcionario = new Funcionario();
        $funcionario->setNome(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
        $funcionario->setcpf(filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING));
        $funcionario->setRg(filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING));
        $funcionario->setDataNascimento(filter_input(INPUT_POST, 'dtNasc', FILTER_SANITIZE_STRING));
        $funcionario->setEmail(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
        $funcionario->setTelefone(filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING));
        $funcionario->setCargo(filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING));
        $funcionario->setSetor(filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_STRING));

        $usuario = unserialize($_SESSION['usuarioLogadoAdmin']);

//        echo json_encode('teste');
//        die();
        $controle->saveAdm($funcionario, $usuario);

        http_response_code(200);
        die();
    }

    if (isset($_POST['create_func'])) {
        $funcionario = new Funcionario();
        $funcionario->setNome(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
        $funcionario->setcpf(filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING));
        $funcionario->setRg(filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING));
        $funcionario->setDataNascimento(filter_input(INPUT_POST, 'dtNasc', FILTER_SANITIZE_STRING));
        $funcionario->setEmail(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
        $funcionario->setTelefone(filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING));
        $funcionario->setCargo(filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING));
        $funcionario->setSetor(filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_STRING));

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
