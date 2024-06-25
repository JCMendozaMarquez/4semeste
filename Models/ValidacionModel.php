<?php
class ValidacionModel extends Query{
    private $dni, $caja, $telefono, $direccion, $id, $estado;
    public function __construct()
    {
        parent::__construct();
    }

    public function getValidacion(string $table)
    {
        $sql = "SELECT * FROM $validacion";
        $data = $this->selectAll($sql);
        return $data;
    }
}
/*
    public function getValidacion(string $table)
    {
        $sql = "SELECT * FROM $table";
        $data = $this->selectAll($sql);
        return $data;
    }
*/