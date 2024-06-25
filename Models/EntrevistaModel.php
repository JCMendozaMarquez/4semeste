<?php
class EntrevistaModel extends Query{
    private $dni, $caja, $telefono, $direccion, $id, $estado;
    public function __construct()
    {
        parent::__construct();
    }

    public function getEntrevista()
    {
        $sql = "SELECT * FROM $entrevista";
        $data = $this->selectAll($sql);
        return $data;
    }
    
}
/*
    public function getEmbajador(string $table)
    {
        $sql = "SELECT * FROM $table";
        $data = $this->selectAll($sql);
        return $data;
    }
*/