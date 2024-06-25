<?php
class Instituciones extends Controller{
    public function __construct() {
        session_start();
        
        parent::__construct();
    }



    public function index()
    {
        if (empty($_SESSION['activo'])) {
            header("location: " . base_url);
        }
       // $data['cajas'] = $this->model->getCajas();

        $this->views->getView($this, "index");
    }




    public function listar()
    {                          //metodo creado en el modelo
        $data = $this->model->getInstituciones();
        for ($i=0; $i < count($data); $i++) { 
            if ($data[$i]['estado'] == 1) {
                $data[$i]['estado'] = '<span class="badge bg-success">Activo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-primary" type="button" onclick="btnEditarInstitucion(' . $data[$i]['id'] . ');"><i class="fas fa-edit"></i></button>
                <button class="btn btn-danger" type="button" onclick="btnEliminarInstitucion(' . $data[$i]['id'] . ');"><i class="fas fa-trash-alt"></i></button>
                <div/>';
            }else {
                $data[$i]['estado'] = '<span class="badge bg-danger">Inactivo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-success" type="button" onclick="btnReingresarInstitucion(' . $data[$i]['id'] . ');"><i class="fas fa-circle"></i></button>
                <div/>';
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
   
    public function registrar()
    {
        $tipo = $_POST['tipo'];
        $nombre = $_POST['nombre'];
        $nombre_corto = $_POST['nombre_corto'];
        $id = $_POST['id'];
        
        if (empty($tipo) || empty($nombre) || empty($nombre_corto)) {
            $msg = array('msg' => 'Todo los campos son obligatorios', 'icono' => 'warning');
        }else{
            if ($id == "") {
                                         // EN EL MODELO
                    $data = $this->model->registrarInstitucion($tipo, $nombre, $nombre_corto);
                    if ($data == "ok") {
                        $msg = array('msg' => 'Institución registrada con éxito', 'icono' => 'success');
                    }else if($data == "existe"){
                        $msg = array('msg' => 'La institución ya existe', 'icono' => 'warning');
                    }else{
                        $msg = array('msg' => 'Error al registrar la institución', 'icono' => 'error');
                    }
                
            }else{
                $data = $this->model->modificarInstitucion($tipo, $nombre, $nombre_corto, $id);
                if ($data == "modificado") {
                    $msg = array('msg' => 'Institución modificada con éxito', 'icono' => 'success');
                }else {
                    $msg = array('msg' => 'Error al modificar la institución', 'icono' => 'error');
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }


    public function editar(int $id)
    {
        $data = $this->model->editarInstitucion($id);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }


    public function eliminar(int $id)
    {
        $data = $this->model->accionInstitucion(0, $id);
        if ($data == 1) {
            $msg = array('msg' => 'Institución dado de baja', 'icono' => 'success');
        }else{
            $msg = array('msg' => 'Error al eliminar la Institución', 'icono' => 'error');
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }


    public function reingresar(int $id)
    {
        $data = $this->model->accionInstitucion(1, $id);
        if ($data == 1) {
            $msg = array('msg' => 'Institución reingresado con éxito', 'icono' => 'success');
        } else {
            $msg = array('msg' => 'Error al reingresar la Institución', 'icono' => 'error');
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }

}
