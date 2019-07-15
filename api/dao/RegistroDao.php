<?php


class RegistroDao
{
    public function create(Registro $registro, Funcionario $funcionario)
    {
        try {
            $conexao = Conexao::get_conexao();
            $conexao->beginTransaction();
            $sql = 'INSERT INTO registros (nome_fantasia, razao_social, cnpj, ramo_atividade, telefone)VALUES(?,?,?,?,?)';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $empresa->getNome());
            $stmt->bindValue(2, $empresa->getRazaoSocial());
            $stmt->bindValue(3, $empresa->getCnpj());
            $stmt->bindValue(4, $empresa->getRamoAtividade());
            $stmt->bindValue(5, $empresa->getTelefone());

            $stmt->execute();

        } catch (Exception $ex) {
            $conexao->rollback();
            throw $ex;
        }
    }
}