<?php


class UsuarioControle
{
    private $dao;

    public function __construct()
    {
        $this->dao = new UsuarioDao();
    }

    /**
     * @param Usuario $usuario
     * @throws Exception
     */
    public function save(Usuario $usuario)
    {
        if ($usuario->getId() == 0) {
            $this->dao->create($usuario);
        } else {
            //  edita usuario
        }
    }
}