<?php


class LoginControle
{
    private $dao;

    public function __construct()
    {
        $this->dao = new UsuarioDao();
    }

    /**
     * @param string $userName
     * @param string $senha
     * @return bool
     * @throws Exception
     */
    public function loginAdm($userName, $senha)
    {
        $retorno = $this->dao->loadUser($userName, $senha);
        if ($retorno != null && $retorno->getTipo() == 1) {
            $_SESSION['usuarioLogadoAdmin'] = serialize($retorno);// salva usuario em sessão
            return true;
        } else {
            return false;
        }
    }

    /**
     * @param string $userName
     * @param string $senha
     * @return bool
     * @throws Exception
     */
    public function loginFunc($userName, $senha)
    {
        $retorno = $this->dao->loadUser($userName, $senha);
        if ($retorno != null && $retorno->getTipo() == 2) {
            $_SESSION['usuarioLogadoFunc'] = serialize($retorno);// salva usuario em sessão
            return true;
        } else {
            return false;
        }
    }
}