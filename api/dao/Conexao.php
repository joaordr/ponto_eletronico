<?php

class Conexao
{
    protected static $conn;

    private function __construct()
    {
        $db_host = 'mysql873.umbler.com:41890';
        $db_nome = 'ponto-eletronico';
        $db_usuario = 'user-bd';
        $db_senha = 'jrp123456';
        $db_driver = 'mysql';

        try {
            self::$conn = new PDO("$db_driver:host=$db_host; dbname=$db_nome", $db_usuario, $db_senha);
            self::$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            self::$conn->exec('SET NAMES utf8');
            self::$conn->exec('SET CHARACTER SET utf8');
        } catch (PDOException $ex) {
            throw $ex;
        }
    }

    /**
     * retorna a conexão com o banco de dados
     *
     * @return PDO
     */
    public static function get_conexao()
    {
        if (!self::$conn || is_string(self::$conn)) {
            new Conexao();
        }
        return self::$conn;
    }

}
