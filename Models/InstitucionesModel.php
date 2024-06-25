<?php
class InstitucionesModel extends Query{
    private $tipo, $nombre, $nombre_corto, $id, $estado;
    public function __construct()
    {
        parent::__construct();
    }
  
    
    public function getInstituciones()
    {
        $sql = "SELECT * FROM institucion";
        $data = $this->selectAll($sql);
        return $data;
    }
    public function registrarInstitucion(string $tipo, string $nombre, string $nombre_corto)
    {
        $this->tipo = $tipo;
        $this->nombre = $nombre;
        $this->nombre_corto = $nombre_corto;
     
        $verificar = "SELECT * FROM institucion WHERE nombre_corto = '$this->nombre_corto'";
        $existe = $this->select($verificar);
        if (empty($existe)) {
            # code...
            $sql = "INSERT INTO institucion(tipo, nombre, nombre_corto) VALUES (?,?,?)";

            $datos = array($this->tipo, $this->nombre, $this->nombre_corto);

            $data = $this->save($sql, $datos);
            if ($data == 1) {
                $res = "ok";
            }else{
                $res = "error";
            }
        }else{
            $res = "existe";
        }
        return $res;
    }



    public function modificarInstitucion(string $tipo, string $nombre, string $nombre_corto, int $id)
    {
        $this->tipo = $tipo;
        $this->nombre = $nombre;
        $this->nombre_corto = $nombre_corto;
        $this->id = $id;

        $sql = "UPDATE institucion SET tipo = ?, nombre = ?, nombre_corto = ? WHERE id = ?";

        $datos = array($this->tipo, $this->nombre, $this->nombre_corto, $this->id);

        $data = $this->save($sql, $datos);
        if ($data == 1) {
            $res = "modificado";
        } else {
            $res = "error";
        }
        return $res;
    }


    public function editarInstitucion(int $id)
    {
        $sql = "SELECT * FROM institucion WHERE id = $id";
        $data = $this->select($sql);
        return $data;
    }


//eliminar o dar de baja cliente
    public function accionInstitucion(int $estado, int $id)
    {
        $this->id = $id;
        $this->estado = $estado;
        $sql = "UPDATE institucion SET estado = ? WHERE id = ?";
        $datos = array($this->estado, $this->id);
        $data = $this->save($sql, $datos);
        return $data;
    }
}
?>