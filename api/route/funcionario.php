<?php
include_once '../php_config.php';
include_once '../autoloader.php';

try {
    $controle = new FuncionarioControle();
    //cria adm
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
        $controle->saveAdm($funcionario, $usuario);

        http_response_code(200);
        die();
    }
    //cria func
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

        $usuario = new Usuario();
        $usuario->setEmail(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
        $usuario->setUser(filter_input(INPUT_POST, 'nomeUsuario', FILTER_SANITIZE_STRING));
        $usuario->setSenha(filter_input(INPUT_POST, 'senhaFunc', FILTER_SANITIZE_STRING));
        $usuario->setTipo(2);

        $empresa = unserialize($_SESSION['empresaLogadoAdmin']);

        $controle->saveFunc($funcionario, $usuario, $empresa->getId());

        http_response_code(200);
        die();
    }
    //atualiza funcionario
    if (isset($_POST['update'])) {
        $funcionario = new Funcionario();
        $funcionario->setNome(filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_STRING));
        $funcionario->setcpf(filter_input(INPUT_POST, 'cpf', FILTER_SANITIZE_STRING));
        $funcionario->setRg(filter_input(INPUT_POST, 'rg', FILTER_SANITIZE_STRING));
        $funcionario->setDataNascimento(filter_input(INPUT_POST, 'dtNasc', FILTER_SANITIZE_STRING));
        $funcionario->setEmail(filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING));
        $funcionario->setTelefone(filter_input(INPUT_POST, 'telefone', FILTER_SANITIZE_STRING));
        $funcionario->setCargo(filter_input(INPUT_POST, 'cargo', FILTER_SANITIZE_STRING));
        $funcionario->setSetor(filter_input(INPUT_POST, 'setor', FILTER_SANITIZE_STRING));
        $funcionario->setId(filter_input(INPUT_POST, 'id', FILTER_SANITIZE_NUMBER_INT));

        $controle->saveFunc($funcionario, null, null);

        http_response_code(200);
        die();
    }
    //exclui um funcionario
    if (isset($_POST['delete'])) {
        $userId = filter_input(INPUT_POST, 'userId', FILTER_SANITIZE_NUMBER_INT);
        $controle->delete($userId);

        http_response_code(200);
        die();
    }

    //lista os funcionarios
    if (isset($_POST['list_func'])) {
        $empresa = unserialize($_SESSION['empresaLogadoAdmin']);
        $retorno = $controle->listarFuncionarios($empresa->getId());
        if ($retorno != null) {
            foreach ($retorno as $func) {
                $lista_convertida[] = $func->toArray();
            }
        }
        echo json_encode((isset($lista_convertida) ? $lista_convertida : null));
        die();
    }
    if (isset($_POST['list_dados'])) {
        $funcionario = unserialize($_SESSION['funcionarioLogadoFunc']);
        echo json_encode($funcionario->toArray());
        die();
    }

    http_response_code(404);
} catch (Exception $ex) {
    http_response_code(500);
    echo json_encode($ex->getMessage());
} finally {
    die();
}
