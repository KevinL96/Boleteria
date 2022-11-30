<?php
class Trabajador extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

    function obtenerTodos(){
        $trabajadores=$this->db->get("trabajador");
        if($trabajadores->num_rows()>0){ //(select * from clientes)cuando si hay clientes
            return $trabajadores;
        }else{
            return false; //cuando no existen clientes 
        }

    }
    public function insertar($datos){

        return $this->db->insert("trabajador",$datos);
    }

    public function eliminarPorId($id){ //id variable para buscar y comparar en db 
        $this->db->where("id_tr",$id);
        return $this->db->delete("trabajador");
    }

    //consultando trabajador por id 
    public function obtenerPorId($id){
        $this->db->where("id_tr",$id);
        $trabajador=$this->db->get("trabajador");
        if($trabajador->num_rows()>0){
            return $trabajador->row(); //devuelve solo el row  porque solo viene uno debido al id
        }else{
            return false;
            
        }
    }//Proceso de actualizacion de trabajadors 
    public function actualizar($id,$datos){
        $this->db->where("id_tr",$id);  //filtro en donde se va a actualizar 
        return $this->db->update("trabajador",$datos); //actualiza los datos dentro de la db 
    }

}


  