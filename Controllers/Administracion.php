<?php
class Administracion extends Controller{
    public function __construct() {
        session_start();
        if (empty($_SESSION['activo'])) {
            header("location: ".base_url);
        }
        parent::__construct();
    }
    public function index()
    {
        $data = $this->model->getEmpresa();

        $this->views->getView($this, "index", $data); //especial
    }

   
    public function modificar()
    {
            $nit = $_POST['nit'];   
            $nombre = $_POST['nombre'];
            $telefono = $_POST['telefono'];
            $direccion = $_POST['direccion'];
            $mensaje = $_POST['mensaje'];
            $id = $_POST['id'];

            
                $data = $this->model->modificar($nit,  $nombre,  $telefono,  $direccion,  $mensaje,  $id);

                if($data == 'ok'){
                $msg = 'ok' ;

                }else{
                    $msg = 'error' ;
                }

                echo json_encode($msg, JSON_UNESCAPED_UNICODE);
                die();
        }

}


  

