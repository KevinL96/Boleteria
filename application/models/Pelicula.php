<?php
class Pelicula extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

    function obtenerTodos(){
        $peliculas=$this->db->get("pelicula");
        if($peliculas->num_rows()>0){ //(select * from clientes)cuando si hay clientes
            return $peliculas;
        }else{
            return false; //cuando no existen clientes 
        }

    }
    public function insertar($datos){

        return $this->db->insert("pelicula",$datos);
    }

    public function eliminarPorId($id){ //id variable para buscar y comparar en db 
        $this->db->where("id_pel",$id);
        return $this->db->delete("pelicula");
    }

    //consultando pelicula por id 
    public function obtenerPorId($id){
        $this->db->where("id_pel",$id);
        $pelicula=$this->db->get("pelicula");
        if($pelicula->num_rows()>0){
            return $pelicula->row(); //devuelve solo el row  porque solo viene uno debido al id
        }else{
            return false;
            
        }
    }//Proceso de actualizacion de peliculas 
    public function actualizar($id,$datos){
        $this->db->where("id_pel",$id);  //filtro en donde se va a actualizar 
        return $this->db->update("pelicula",$datos); //actualiza los datos dentro de la db 
    }

}


  