<?php
class Boleto extends CI_Model {

	function __construct()
    {
        parent::__construct();
    }

    function obtenerTodos(){
        $boletos=$this->db->get("boleto");
        if($boletos->num_rows()>0){ //(select * from clientes)cuando si hay clientes
            return $boletos;
        }else{
            return false; //cuando no existen clientes 
        }

    }
    public function insertar($datos){

        return $this->db->insert("boleto",$datos);
    }

    public function eliminarPorId($id){ //id variable para buscar y comparar en db 
        $this->db->where("id_bol",$id);
        return $this->db->delete("boleto");
    }

    //consultando trabajador por id 
    public function obtenerPorId($id){
        $this->db->where("id_bol",$id);
        $boleto=$this->db->get("boleto");
        if($boleto->num_rows()>0){
            return $boleto->row(); //devuelve solo el row  porque solo viene uno debido al id
        }else{
            return false;
            
        }
    }//Proceso de actualizacion de trabajadors 
    public function actualizar($id,$datos){
        $this->db->where("id_bol",$id);  //filtro en donde se va a actualizar 
        return $this->db->update("boleto",$datos); //actualiza los datos dentro de la db 
    }

}


  