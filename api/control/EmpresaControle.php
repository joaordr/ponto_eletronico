<?php


class EmpresaControle
{
    private $dao;

    public function __construct()
    {
        $this->dao = new EmpresaDao();
    }

    /**
     * @param Empresa $empresa
     * @throws Exception
     */
    public function save(Empresa $empresa)
    {
        if ($empresa->getId() == 0) {
            $this->dao->create($empresa);
        } else {
            $this->dao->update($empresa);
        }
    }

    /**
     * @param int $id
     * @return void
     * @throws Exception
     */
    public function load($id)
    {
        $retorno = $this->dao->load($id);
        $_SESSION['empresaLogadoAdmin'] = serialize($retorno);// salva usuario em sessão
    }

}