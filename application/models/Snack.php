<?php
class Snack extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

    function obtenerTodos(){
        $snacks=$this->db->get("snacks");
        if($snacks->num_rows()>0){ //(select * from clientes)cuando si hay clientes
            return $snacks;
        }else{
            return false; //cuando no existen clientes 
        }

    }
    public function insertar($datos){

        return $this->db->insert("snacks",$datos);
    }

    public function eliminarPorId($id){ //id variable para buscar y comparar en db 
        $this->db->where("id_snk",$id);
        return $this->db->delete("snacks");
    }

    //consultando pelicula por id 
    public function obtenerPorId($id){
        $this->db->where("id_snk",$id);
        $snack=$this->db->get("snacks");
        if($snack->num_rows()>0){
            return $snack->row(); //devuelve solo el row  porque solo viene uno debido al id
        }else{
            return false;
            
        }
    }//Proceso de actualizacion de peliculas 
    public function actualizar($id,$datos){
        $this->db->where("id_snk",$id);  //filtro en donde se va a actualizar 
        return $this->db->update("snacks",$datos); //actualiza los datos dentro de la db 
    }

}


  