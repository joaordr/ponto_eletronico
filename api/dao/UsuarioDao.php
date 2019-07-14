<?php


class UsuarioDao
{
    /**
     * @param Usuario $usuario
     * @throws Exception
     */
    public function create(Usuario $usuario)
    {
        try {
            $conexao = Conexao::get_conexao();

            $sql = 'INSERT INTO usuario (user, senha, tipo, email)VALUES(?,?,?,?)';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $usuario->getUser());
            $stmt->bindValue(1, $usuario->getSenha());
            $stmt->bindValue(1, $usuario->getTipo());
            $stmt->bindValue(1, $usuario->getEmail());
            $stmt->execute();
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}