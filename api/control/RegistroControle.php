<?php


class RegistroControle
{
    private $dao;

    public function __construct()
    {
        $this->dao = new RegistroDao();
    }

    /**
     * @param int         $tipo
     * @param Funcionario $funcionario
     *
     * @return string
     * @throws Exception
     */
    public function create($tipo, Funcionario $funcionario){
        return $this->dao->create($tipo, $funcionario);
    }

    /**
     * @param Funcionario $funcionario
     * @return array|null
     * @throws Exception
     */
    public function load(Funcionario $funcionario){
        return $this->dao->load($funcionario);
    }
    


}