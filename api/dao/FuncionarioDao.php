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
     * @return array
     * @throws Exception
     */
    public function createFunc(Funcionario $funcionario, $empresaId)
    {
        try {
            $conexao = Conexao::get_conexao();

            $sql = 'INSERT INTO funcionario (nome, cpf, rg, data_nascimento, email, telefone, cargo, setor, empresa_id, token)VALUES(?,?,?,?,?,?,?,?,?,?)';
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
            $token = password_hash($funcionario->getEmail(), PASSWORD_DEFAULT);
            $stmt->bindValue(0, $token);
            $stmt->execute();
            return [$token, $funcionario->getEmail()];
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

    public function update(Funcionario $funcionario)
    {

    }

    public function listarFuncionarios($empresaId)
    {

    }
}