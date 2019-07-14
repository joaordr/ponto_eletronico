<?php


class EmpresaDao
{

    /**
     * @param Empresa $empresa
     * @param Funcionario $adm
     * @return string
     * @throws Exception
     */
    public function create(Empresa $empresa, Funcionario $adm)
    {
        try {
            $conexao = Conexao::get_conexao();
            $conexao->beginTransaction();
            $sql = 'INSERT INTO empresa (nome_fantasia, razao_social, cnpj, ramo_atividade, telefone)VALUES(?,?,?,?,?)';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $empresa->getNome());
            $stmt->bindValue(2, $empresa->getRazaoSocial());
            $stmt->bindValue(3, $empresa->getCnpj());
            $stmt->bindValue(4, $empresa->getRamoAtividade());
            $stmt->bindValue(5, $empresa->getTelefone());
            if ($stmt->execute()) {
                $empresaId = $conexao->LastInsertId();
            }

            $sql = 'UPDATE funcionario SET empresa_id = ? WHERE id = ?;';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $empresaId);
            $stmt->bindValue(2, $adm->getId());
            $stmt->execute();
            $conexao->commit();

            return $empresaId;
        } catch (Exception $ex) {
            $conexao->rollback();
            throw $ex;
        }
    }

    /**
     * @param Empresa $empresa
     * @throws Exception
     */
    public function update(Empresa $empresa)
    {
        try {
            $conexao = Conexao::get_conexao();
            $sql = 'UPDATE empresa SET nome_fantasia = ?, razao_social = ?, cnpj = ?, ramo_atividade = ?, telefone = ? WHERE id = ?;';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $empresa->getNome());
            $stmt->bindValue(2, $empresa->getRazaoSocial());
            $stmt->bindValue(3, $empresa->getCnpj());
            $stmt->bindValue(4, $empresa->getRamoAtividade());
            $stmt->bindValue(5, $empresa->getTelefone());
            $stmt->bindValue(5, $empresa->getId());
            $stmt->execute();
        } catch (Exception $ex) {
            throw $ex;
        }
    }

    /**
     * @param int $id
     * @return Empresa|null
     * @throws Exception
     */
    public function load($id)
    {
        try {
            $conexao = Conexao::get_conexao();
            $sql = 'SELECT * FROM empresa WHERE id = ?;';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, $id);
            $stmt->execute();
            if ($stmt->setFetchMode(PDO::FETCH_ASSOC)) {
                $result = $stmt->fetchAll();
                foreach ($result as $key => $row) {
                    $empresa = new Empresa();
                    $empresa->setId($row['id']);
                    $empresa->setNome($row['nome_fantasia']);
                    $empresa->setRazaoSocial($row['razao_social']);
                    $empresa->setCnpj($row['cnpj']);
                    $empresa->setRamoAtividade($row['ramo_atividade']);
                    $empresa->setTelefone($row['telefone']);
                    return $empresa;
                }
            }
            return null;
        } catch (Exception $ex) {
            throw $ex;
        }
    }
}