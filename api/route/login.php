<?php
include_once '../php_config.php';
include_once '../autoloader.php';

try {
    $controle = new LoginControle();
    // faz login no usuario adm
    if (isset($_POST['login_adm'])) {
        $userName = filter_input(INPUT_POST, 'userLogin', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'senhaLogin', FILTER_SANITIZE_STRING);
        $retorno = $controle->loginAdm($userName, $senha);
        echo json_encode($retorno);
        http_response_code(200);
        die();
    }

    // carrega informações do adm
    if (isset($_POST['load_adm_info'])) {
        $usuario = unserialize($_SESSION['usuarioLogadoAdmin']);
        $controleFuncionario = new FuncionarioControle();

        // load funcionario
        $retorno = $controleFuncionario->loadAdmInfo($usuario->getId());
        if (!$retorno) {
            echo json_encode('cadFunc');
            die();
        }

        // verifica se a empresa ja esta cadastrada
        $funcionario = unserialize($_SESSION['funcionarioLogadoAdmin']);
        if ($funcionario->getEmpresa() == null) {
            echo json_encode('cadEmpresa');
            die();
        }

        //load empresa
        $controleEmpresa = new EmpresaControle();
        $controleEmpresa->load($funcionario->getEmpresa());

        echo json_encode('menu');
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

    if (isset($_POST['load_func_info'])) {
        $usuario = unserialize($_SESSION['usuarioLogadoFunc']);
        $controleFuncionario = new FuncionarioControle();
        $controleFuncionario->loadFuncInfo($usuario->getId());

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
