<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Sucursales extends CI_Controller
{

	// definiendo el constructor de la clase 
	public function __construct()
	{
		parent::__construct();
		$this->load->model("sucursal"); //llamamos al modeelo 
	}


	public function index()
	{
		
		$data["listadoSucursales"] = $this->sucursal->obtenerTodos(); //se hace la consulta
		
		$this->load->view('header');
		$this->load->view('sucursales/index.php', $data);
		$this->load->view('footer');
	}
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('sucursales/nuevo.php');
		$this->load->view('footer');
	}
	// funcion para capturar los valores del formulario nuevo 


	public function guardarSucursal()
	{
		// error_reporting(0);
		//desactivar los errores 
		$datosNuevaSucursal = array(
			//posicion dentreo del array 
			"nombre_sc" => $this->input->post('nombre_sc'),
			"direccion_sc" => $this->input->post('direccion_sc'),
            "telefono_sc" => $this->input->post('telefono_sc'),
            "encargado_sc" => $this->input->post('encargado_sc')
			

		);
		print_r($datosNuevaSucursal);
		if ($this->sucursal->insertar($datosNuevaSucursal)) {

			redirect('sucursales/index');
		} else {
			echo "<h1>Error</h1>";
		}

	}

	public function borrar($id_sc)
	{
		if ($this->sucursal->eliminarPorId($id_sc)) {
			echo "Eliminado";
			redirect('Sucursales/index');

		} else {
			echo "Error al eliminar :c ";
		}
	}


	public function actualizar($id)
	{
		$data["sucursalEditar"] = $this->sucursal->obtenerPorId($id);
		$this->load->view('header');
		$this->load->view('Sucursales/actualizar', $data);
		$this->load->view('footer');


	}


	public function procesarActualizacion(){
		$datosSucursalEditada=array(
            "nombre_sc" => $this->input->post('nombre_sc'),
			"direccion_sc" => $this->input->post('direccion_sc'),
            "telefono_sc" => $this->input->post('telefono_sc'),
            "encargado_sc" => $this->input->post('encargado_sc')
		);
	 $id=$this->input->post("id_sc");
		if($this->sucursal->actualizar($id,$datosSucursalEditada)){
			redirect('Sucursales/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}