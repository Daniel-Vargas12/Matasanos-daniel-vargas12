<?php

class EspecialidadDAO{
    private $id;
    private $nombre;
    
    public function __construct($id=0, $nombre=""){
        $this -> id = $id;
        $this -> nombre = $nombre;
    }
    
    public function consultar(){
        return "select idEspecialidad, nombre
                from Especialidad
                order by nombre asc";
    }
    
    public function consultarMedicosPorEspecialidad($idEspecialidad){
        return "SELECT nombre, apellido 
        FROM Medico WHERE especialidad_id = " . $idEspecialidad;
    }
    
       
}

?>