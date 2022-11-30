<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Salas extends CI_Controller
{

	// definiendo el constructor de la clase 
	public function __construct()
	{
		parent::__construct();
		$this->load->model("sala"); //llamamos al modeelo 
	}


	public function index()
	{
		
		$data["listadoSalas"] = $this->sala->obtenerTodos(); //se hace la consulta
		
		$this->load->view('header');
		$this->load->view('Salas/index.php', $data);
		$this->load->view('footer');
	}
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('Salas/nuevo.php');
		$this->load->view('footer');
	}
	// funcion para capturar los valores del formulario nuevo 


	public function guardarSala()
	{
		// error_reporting(0);
		//desactivar los errores 
		$datosNuevaSala = array(
			//posicion dentreo del array 
            "numero_sal" => $this->input->post('numero_sal'),
			"asientos_sal" => $this->input->post('asientos_sal'),
			"sucursal_sal" => $this->input->post('sucursal_sal'),
			"tipo_sal" => $this->input->post('tipo_sal')

		);
		print_r($datosNuevaSala);
		if ($this->sala->insertar($datosNuevaSala)) {

			redirect('Salas/index');
		} else {
			echo "<h1>Error</h1>";
		}

	}

	public function borrar($id_sal)
	{
		if ($this->sala->eliminarPorId($id_sal)) {
			echo "Eliminado";
			redirect('Salas/index');

		} else {
			echo "Error al eliminar :c ";
		}
	}


	public function actualizar($id)
	{
		$data["salaEditar"] = $this->sala->obtenerPorId($id);
		$this->load->view('header');
		$this->load->view('Salas/actualizar', $data);
		$this->load->view('footer');


	}
	// public function procesarActualizacion()
	// {
	// 	// error_reporting(0);
	// 	//desactivar los errores 
	// 	$datosSalaEditado = array(
	// 		//posicion dentreo del array 
	// 		"cedula_est" => $this->input->post('cedula_est'),
	// 		"apellido_est" => $this->input->post('apellido_est'),
	// 		"nombre_est" => $this->input->post('nombre_est'),
	// 		"telefono_est" => $this->input->post('telefono_est'),
	// 		"direccion_est" => $this->input->post('direccion_est'),
	// 		"fecha_nacimiento_est" => $this->input->post('fecha_nacimiento_est')
	// 	);
	// 	$id=$this->input->post("id_est");
	// 	if ($this->Sala->actualizar($id,$datosSalaEditado)) {

	// 		redirect('Salas/index');
	// 	} else {
	// 		echo "<h1>Error</h1>";
	// 	}
	// }

	public function procesarActualizacion(){
		$datosSalaEditado=array(
            "numero_sal" => $this->input->post('numero_sal'),
			"asientos_sal" => $this->input->post('asientos_sal'),
			"sucursal_sal" => $this->input->post('sucursal_sal'),
			"tipo_sal" => $this->input->post('tipo_sal')
		);
	 $id=$this->input->post("id_sal");
		if($this->sala->actualizar($id,$datosSalaEditado)){
			redirect('Salas/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}