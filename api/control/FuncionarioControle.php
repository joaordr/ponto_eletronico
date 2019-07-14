<?php


class FuncionarioControle
{
    private $dao;

    public function __construct()
    {
        $this->dao = new FuncionarioDao();
    }

    /**
     * @param Funcionario $funcionario
     * @param Usuario $usuario
     * @throws Exception
     */
    public function saveAdm(Funcionario $funcionario, Usuario $usuario)
    {
        if ($funcionario->getId() == 0) {
            $this->dao->createAdm($funcionario, $usuario);
        } else {
            $this->dao->update($funcionario);
        }

        $this->loadAdmInfo($usuario->getId());
    }

    /**
     * @param int $userId
     * @return bool
     * @throws Exception
     */
    public function loadAdmInfo($userId)
    {
        $retorno = $this->dao->loadAdmInfo($userId);
        if ($retorno != null) {
            $_SESSION['funcionarioLogadoAdmin'] = serialize($retorno);// salva funcionario em sessão
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param Funcionario $funcionario
     * @param int $empresaId
     * @throws Exception
     */
    public function saveFunc(Funcionario $funcionario, $empresaId)
    {
        if ($funcionario->getId() == 0) {
            $retorno = $this->dao->createFunc($funcionario, $empresaId);
            $token = $retorno[0];
            $email = $retorno[1];
            $msg = '<b>Acesse o link para criar seu usuário de acesso</b><br>
                    http://localhost/ponto_eletronico/index.php?token=' . $token . '<br>';
            Email::Enviar($email, $msg, 'Criação de usuário SPE');
        } else {
            $this->dao->update($funcionario);
        }
    }
}