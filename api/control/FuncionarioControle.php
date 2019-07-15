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
     * @param Usuario $usuario
     * @param int $empresaId
     * @throws Exception
     */
    public function saveFunc(Funcionario $funcionario, $usuario, $empresaId)
    {
        if ($funcionario->getId() == 0) {
            $usuarioDao = new UsuarioDao();
            $userId = $usuarioDao->create($usuario);
            $this->dao->createFunc($funcionario, $userId, $empresaId);
        } else {
            $this->dao->update($funcionario);
        }
    }

    /**
     * @param Funcionario $funcionario
     * @throws Exception
     */
    public function update(Funcionario $funcionario)
    {
        $this->dao->update($funcionario);
    }

    /**
     * @param int $id
     * @throws Exception
     */
    public function delete($id)
    {
        $this->dao->delete($id);
    }

    /**
     * @param $empresaId
     * @return array|null
     * @throws Exception
     */
    public function listarFuncionarios($empresaId)
    {
        return $this->dao->listarFuncionarios($empresaId);
    }

}