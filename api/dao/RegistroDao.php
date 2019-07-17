<?php


class RegistroDao {
    /**
     * @param int         $tipo
     * @param Funcionario $funcionario
     *
     * @return string
     * @throws Exception
     */
    public function create($tipo, Funcionario $funcionario) {
        try {
            $conexao = Conexao::get_conexao();

            $sql = 'SELECT * FROM registros WHERE MONTH(data) = ? AND YEAR(data) = ? AND DAY(data) = ? AND funcionario_id = ? AND tipo = ?;';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, date('m'));
            $stmt->bindValue(2, date('Y'));
            $stmt->bindValue(3, date('d'));
            $stmt->bindValue(4, $funcionario->getId());
            $stmt->bindValue(5, $tipo);
            $stmt->execute();
            if ($stmt->setFetchMode(PDO::FETCH_ASSOC) && count($stmt->fetchAll()) > 0) {
                return 'not allowed';
            }

            $sql = 'INSERT INTO registros (data, hora, tipo, funcionario_id)VALUES(?,?,?,?)';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, date('Y-m-d'));
            $stmt->bindValue(2, date('H:i'));
            $stmt->bindValue(3, $tipo);
            $stmt->bindValue(4, $funcionario->getId());

            $stmt->execute();

        } catch (Exception $ex) {
            throw $ex;
        }
    }

    /**
     * @param Funcionario $funcionario
     *
     * @return array|null
     * @throws Exception
     */
    public function load(Funcionario $funcionario) {
        try {
            $conexao = Conexao::get_conexao();
            $sql = 'SELECT * FROM registros WHERE MONTH(data) = ? AND YEAR(data) = ? AND funcionario_id = ? ORDER BY data, tipo;';
            $stmt = $conexao->prepare($sql);
            $stmt->bindValue(1, date('m'));
            $stmt->bindValue(2, date('Y'));
            $stmt->bindValue(3, $funcionario->getId());
            $stmt->execute();
            if ($stmt->setFetchMode(PDO::FETCH_ASSOC)) {
                $result = $stmt->fetchAll();

                $dia_controle = null;
                $listaDia = null;


                foreach ($result as $key => $row) {
                    if ($dia_controle != null && $dia_controle != date("d", strtotime($row['data']))) {
                        $lista[] = $listaDia;
                        $listaDia = null;
                    }
                    $registro = new Registro();
                    $registro->setData(date("d", strtotime($row['data'])));
                    $registro->setHora($row['hora']);
                    $registro->setTipo($row['tipo']);
                    $listaDia[] = $registro->toArray();

                    $dia_controle = date("d", strtotime($row['data']));
                    if (count($result) == ($key + 1)) {
                        $lista[] = $listaDia;
                    }
                }
            }
            return $lista;
        } catch (Exception $ex) {
            throw $ex;
        }
    }


}