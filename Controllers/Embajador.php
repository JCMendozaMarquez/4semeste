<?php
class Embajador extends Controller{

    public function __construct() {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: ".base_url);
        }
        parent::__construct();
    }
    public function index()
    {
        $this->views->getView($this, "index");
    }

    
    public function listar()
    {
        $data = $this->model->getEmbaja('embajador');  //solicita consulta al modeloaaaa 
        for ($i=0; $i < count($data); $i++) { 
            if ($data[$i]['estado'] == 1) {
                $data[$i]['estado'] = '<span class="badge bg-success">Activo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-primary" type="button" onclick="btnEditarEmbajador(' . $data[$i]['id'] . ');"><i class="fas fa-edit"></i>Editar</button>
                <button class="btn btn-danger" type="button" onclick="btnEliminarEmbajador(' . $data[$i]['id'] . ');"><i class="fas fa-trash-alt"></i>Eliminar</button>
                <div/>';
            }else{
                $data[$i]['estado'] = '<span class="badge bg-danger">Inactivo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-success" type="button" onclick="btnReingresarEmbajador(' . $data[$i]['id'] . ');"><i class="fas fa-circle"></i>Reingresar</button>
                <div/>';
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }



}