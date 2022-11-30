<?php
class Sala extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

    function obtenerTodos(){
        $salas=$this->db->get("salas");
        if($salas->num_rows()>0){ //(select * from clientes)cuando si hay clientes
            return $salas;
        }else{
            return false; //cuando no existen clientes 
        }

    }
    public function insertar($datos){

        return $this->db->insert("salas",$datos);
    }

    public function eliminarPorId($id){ //id variable para buscar y comparar en db 
        $this->db->where("id_sal",$id);
        return $this->db->delete("salas");
    }

    //consultando sala por id 
    public function obtenerPorId($id){
        $this->db->where("id_sal",$id);
        $sala=$this->db->get("salas");
        if($sala->num_rows()>0){
            return $sala->row(); //devuelve solo el row  porque solo viene uno debido al id
        }else{
            return false;
            
        }
    }//Proceso de actualizacion de salas 
    public function actualizar($id,$datos){
        $this->db->where("id_sal",$id);  //filtro en donde se va a actualizar 
        return $this->db->update("salas",$datos); //actualiza los datos dentro de la db 
    }

}


  