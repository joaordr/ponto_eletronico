<?php


class FuncionarioDao
{
    /**
     * @param Funcionario $funcionario
     * @param Usuario $usuario
     * @param int $empresaId
     * @throws Exception
     */
    public function createAdm(Funcionario $funcionario, Usuario $usuario, $empresaId)
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
            $stmt->bindValue(10, $usuario->getId());
            $stmt->execute();
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}