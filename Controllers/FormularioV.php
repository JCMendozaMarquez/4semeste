<?php
class FormularioV extends Controller{
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
        $data = $this->model->getFormularioV('FormularioV');
        for ($i=0; $i < count($data); $i++) { 
            if ($data[$i]['estado'] == 1) {
                $data[$i]['estado'] = '<span class="badge bg-success">Activo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-primary" type="button" onclick="btnEditarFormularioV(' . $data[$i]['id'] . ');"><i class="fas fa-edit"></i></button>
                <button class="btn btn-danger" type="button" onclick="btnEliminarFormularioV(' . $data[$i]['id'] . ');"><i class="fas fa-trash-alt"></i></button>
                <div/>';
            }else{
                $data[$i]['estado'] = '<span class="badge bg-danger">Inactivo</span>';
                $data[$i]['acciones'] = '<div>
                <button class="btn btn-success" type="button" onclick="btnReingresarFormularioV(' . $data[$i]['id'] . ');"><i class="fas fa-circle"></i></button>
                <div/>';
            }
        }
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }

}
/*
    public function registrar()
    {
        $caja = $_POST['nombre'];
        $id = $_POST['id'];
        if (empty($caja)) {
            $msg = array('msg' => 'Todo los campos son obligatorios', 'icono' => 'warning');
        }else{
            if ($id == "") {
                    $data = $this->model->registrarCaja($caja);
                    if ($data == "ok") {
                        $msg = array('msg' => 'Caja registrado con éxito', 'icono' => 'success');
                    }else if($data == "existe"){
                        $msg = array('msg' => 'La caja ya existe', 'icono' => 'warning');
                    }else{
                        $msg = array('msg' => 'Error al registrar la caja', 'icono' => 'error');
                    }
            }else{
                $data = $this->model->modificarCaja($caja, $id);
                if ($data == "modificado") {
                        $msg = array('msg' => 'Caja Modificado con éxito', 'icono' => 'success');
                }else {
                        $msg = array('msg' => 'Error al modificar la caja', 'icono' => 'error');
                }
            }
        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function editar(int $id)
    {
        $data = $this->model->editarCaja($id);
        echo json_encode($data, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function eliminar(int $id)
    {
        $data = $this->model->accionCaja(0, $id);
        if ($data == 1) {
            $msg = array('msg' => 'Caja dado de baja', 'icono' => 'success');

        }else{
            $msg = array('msg' => 'Error al aliminar la caja', 'icono' => 'error');

        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
    public function reingresar(int $id)
    {
        $data = $this->model->accionCaja(1, $id);
        if ($data == 1) {
            $msg = array('msg' => 'Caja reingresado', 'icono' => 'success');

        } else {
            $msg = array('msg' => 'Error al reingresar la caja', 'icono' => 'error');

        }
        echo json_encode($msg, JSON_UNESCAPED_UNICODE);
        die();
    }
}
*/