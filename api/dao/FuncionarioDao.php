<?php


class FuncionarioDao
{
    /**
     * @param Funcionario $funcionario
     * @param Usuario $usuario
     * @throws Exception
     */
    public function createAdm(Funcionario $funcionario, Usuario $usuario)
    {
        try {
            $conexao = Conexao::get_conexao();

            $sql = 'INSERT INTO funcionario (nome, cpf, rg, data_nascimento, email, telefone, cargo, setor, user_id)VALUES(?,?,?,?,?,?,?,?,?)';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $funcionario->getNome());
            $stmt->bindValue(2, $funcionario->getCpf());
            $stmt->bindValue(3, $funcionario->getRg());
            $stmt->bindValue(4, $funcionario->getDataNascimento());
            $stmt->bindValue(5, $funcionario->getEmail());
            $stmt->bindValue(6, $funcionario->getTelefone());
            $stmt->bindValue(7, $funcionario->getCargo());
            $stmt->bindValue(8, $funcionario->getSetor());
            $stmt->bindValue(9, $usuario->getId());
            $stmt->execute();
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    /**
     * @param Funcionario $funcionario
     * @param int $empresaId
     * @throws Exception
     */
    public function createFunc(Funcionario $funcionario, $userId, $empresaId)
    {
        try {
            $conexao = Conexao::get_conexao();

            $sql = 'INSERT INTO funcionario (nome, cpf, rg, data_nascimento, email, telefone, cargo, setor, empresa_id, user_id)VALUES(?,?,?,?,?,?,?,?,?,?)';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $funcionario->getNome());
            $stmt->bindValue(2, $funcionario->getCpf());
            $stmt->bindValue(3, $funcionario->getRg());
            $stmt->bindValue(4, $funcionario->getDataNascimento());
            $stmt->bindValue(5, $funcionario->getEmail());
            $stmt->bindValue(6, $funcionario->getTelefone());
            $stmt->bindValue(7, $funcionario->getCargo());
            $stmt->bindValue(8, $funcionario->getSetor());
            $stmt->bindValue(9, $empresaId);
            $stmt->bindValue(10, $userId);
            $stmt->execute();
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    /**
     * @param $userId
     * @return Funcionario
     * @throws Exception
     */
    public function loadAdmInfo($userId)
    {
        try {
            $conexao = Conexao::get_conexao();
            $sql = 'SELECT * FROM funcionario WHERE user_id = ?;';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $userId);
            $stmt->execute();
            if ($stmt->setFetchMode(PDO::FETCH_ASSOC)) {
                $result = $stmt->fetchAll();
                foreach ($result as $key => $row) {
                    $funcionario = new Funcionario();
                    $funcionario->setId($row['id']);
                    $funcionario->setNome($row['nome']);
                    $funcionario->setCpf($row['cpf']);
                    $funcionario->setRg($row['rg']);
                    $funcionario->setEmail($row['email']);
                    $funcionario->setDataNascimento($row['data_nascimento']);
                    $funcionario->setTelefone($row['telefone']);
                    $funcionario->setCargo($row['cargo']);
                    $funcionario->setSetor($row['setor']);
                    $funcionario->setEmpresa($row['empresa_id']);
                    return $funcionario;
                }
            }
            return null;
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    /**
     * @param Funcionario $funcionario
     * @throws Exception
     */
    public function update(Funcionario $funcionario)
    {
        try {
            $conexao = Conexao::get_conexao();
            $sql = 'UPDATE funcionario SET nome = ?, cpf = ?, rg = ?, data_nascimento = ?, email = ?, telefone = ?, cargo = ?, setor = ? WHERE id = ?;';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $funcionario->getNome());
            $stmt->bindValue(2, $funcionario->getCpf());
            $stmt->bindValue(3, $funcionario->getRg());
            $stmt->bindValue(4, $funcionario->getDataNascimento());
            $stmt->bindValue(5, $funcionario->getEmail());
            $stmt->bindValue(6, $funcionario->getTelefone());
            $stmt->bindValue(7, $funcionario->getCargo());
            $stmt->bindValue(8, $funcionario->getSetor());
            $stmt->bindValue(9, $funcionario->getId());
            $stmt->execute();
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    /**
     * @param int $id
     * @throws Exception
     */
    public function delete($id)
    {
        try {
            $conexao = Conexao::get_conexao();
            $sql = 'DELETE FROM usuario WHERE id = ?;';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    /**
     * @param $empresaId
     * @return null|array
     * @throws Exception
     */
    public function listarFuncionarios($empresaId)
    {
        try {
            $conexao = Conexao::get_conexao();
            $sql = 'SELECT funcionario.* FROM funcionario, usuario WHERE funcionario.empresa_id = ? AND usuario.id = funcionario.user_id AND usuario.tipo = 2';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $empresaId);
            $stmt->execute();
            if ($stmt->setFetchMode(PDO::FETCH_ASSOC)) {
                $result = $stmt->fetchAll();
                foreach ($result as $key => $row) {
                    $funcionario = new Funcionario();
                    $funcionario->setId($row['id']);
                    $funcionario->setNome($row['nome']);
                    $funcionario->setCpf($row['cpf']);
                    $funcionario->setRg($row['rg']);
                    $funcionario->setEmail($row['email']);
                    $funcionario->setDataNascimento($row['data_nascimento']);
                    $funcionario->setTelefone($row['telefone']);
                    $funcionario->setCargo($row['cargo']);
                    $funcionario->setSetor($row['setor']);
                    $funcionario->setUsuario($row['user_id']);
                    $lista[] = $funcionario;
                }
            }
            return isset($lista) ? $lista : null;
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}