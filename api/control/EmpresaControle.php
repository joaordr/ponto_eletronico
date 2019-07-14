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
     * @return Empresa|null
     * @throws Exception
     */
    public function load($id)
    {
        return $this->dao->load($id);
    }

}