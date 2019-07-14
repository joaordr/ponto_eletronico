<?php


class UsuarioDao
{
    /**
     * @param Usuario $usuario
     * @return string
     * @throws Exception
     */
    public function create(Usuario $usuario)
    {
        try {
            $conexao = Conexao::get_conexao();

            $sql = 'INSERT INTO usuario (user, senha, tipo, email)VALUES(?,?,?,?)';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $usuario->getUser());
            $stmt->bindValue(2, password_hash($usuario->getSenha(), PASSWORD_DEFAULT));
            $stmt->bindValue(3, $usuario->getTipo());
            $stmt->bindValue(4, $usuario->getEmail());
            if ($stmt->execute()) {
                $id = $conexao->LastInsertId();
            }
            return $id;
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    /**
     * @param string $userName
     * @param string $senha
     * @return Usuario|null
     * @throws Exception
     */
    public function loadUser($userName, $senha)
    {
        try {
            $conexao = Conexao::get_conexao();
            $sql = 'SELECT * FROM usuario WHERE user = ?;';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $userName);
            $stmt->execute();
            if ($stmt->setFetchMode(PDO::FETCH_ASSOC)) {
                $result = $stmt->fetchAll();
                foreach ($result as $key => $row) {
                    $usuario = new Usuario();
                    if (!password_verify($senha, $row['senha'])) {
                        return null;
                    }
                    $usuario->setId($row['id']);
                    $usuario->setUser($row['user']);
                    $usuario->setSenha($row['senha']);
                    $usuario->setUser($row['user']);
                    $usuario->setEmail($row['email']);
                    $usuario->setTipo($row['tipo']);
                    return $usuario;
                }
            }
            return null;
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}