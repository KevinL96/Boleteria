<?php
class Sucursal extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

    function obtenerTodos(){
        $sucursales=$this->db->get("sucursal");
        if($sucursales->num_rows()>0){ //(select * from clientes)cuando si hay clientes
            return $sucursales;
        }else{
            return false; //cuando no existen clientes 
        }

    }
    public function insertar($datos){

        return $this->db->insert("sucursal",$datos);
    }

    public function eliminarPorId($id){ //id variable para buscar y comparar en db 
        $this->db->where("id_sc",$id);
        return $this->db->delete("sucursal");
    }

    //consultando pelicula por id 
    public function obtenerPorId($id){
        $this->db->where("id_sc",$id);
        $sucursal=$this->db->get("sucursal");
        if($sucursal->num_rows()>0){
            return $sucursal->row(); //devuelve solo el row  porque solo viene uno debido al id
        }else{
            return false;
            
        }
    }//Proceso de actualizacion de peliculas 
    public function actualizar($id,$datos){
        $this->db->where("id_sc",$id);  //filtro en donde se va a actualizar 
        return $this->db->update("sucursal",$datos); //actualiza los datos dentro de la db 
    }

}


  