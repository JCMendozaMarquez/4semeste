<?php
class FormularioVModel extends Query{
    private $dni, $caja, $telefono, $direccion, $id, $estado;
    public function __construct()
    {
        parent::__construct();
    }

    public function getFormularioV(string $formulariov)
    {
        $sql = "SELECT * FROM $formulariov";
        $data = $this->selectAll($sql);
        return $data;
    }

/*
    public function getEmbajador(string $table)
    {
        $sql = "SELECT * FROM $table";
        $data = $this->selectAll($sql);
        return $data;
    }
*/


}