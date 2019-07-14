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
     * @param Funcionario $adm
     * @throws Exception
     */
    public function save(Empresa $empresa, Funcionario $adm)
    {
        if ($empresa->getId() == 0) {
            $empresaId = $this->dao->create($empresa, $adm);
        } else {
            $this->dao->update($empresa);
            $empresaId = $empresa->getId();
        }
        $this->load($empresaId);
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