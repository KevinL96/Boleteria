<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Snacks extends CI_Controller
{

	// definiendo el constructor de la clase 
	public function __construct()
	{
		parent::__construct();
		$this->load->model("snack"); //llamamos al modeelo 
	}


	public function index()
	{
		
		$data["listadoSnacks"] = $this->snack->obtenerTodos(); //se hace la consulta
		
		$this->load->view('header');
		$this->load->view('Snacks/index.php', $data);
		$this->load->view('footer');
	}
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('Snacks/nuevo.php');
		$this->load->view('footer');
	}
	// funcion para capturar los valores del formulario nuevo 


	public function guardarSnack()
	{
		// error_reporting(0);
		//desactivar los errores 
		$datosNuevoSnack = array(
			//posicion dentreo del array 
			"nombre_snk" => $this->input->post('nombre_snk'),
			"precio_snk" => $this->input->post('precio_snk')
			

		);
		print_r($datosNuevoSnack);
		if ($this->snack->insertar($datosNuevoSnack)) {

			redirect('Snacks/index');
		} else {
			echo "<h1>Error</h1>";
		}

	}

	public function borrar($id_snk)
	{
		if ($this->snack->eliminarPorId($id_snk)) {
			echo "Eliminado";
			redirect('Snacks/index');

		} else {
			echo "Error al eliminar :c ";
		}
	}


	public function actualizar($id)
	{
		$data["snackEditar"] = $this->snack->obtenerPorId($id);
		$this->load->view('header');
		$this->load->view('Snacks/actualizar', $data);
		$this->load->view('footer');


	}


	public function procesarActualizacion(){
		$datossnackEditado=array(
            "nombre_snk" => $this->input->post('nombre_snk'),
			"precio_snk" => $this->input->post('precio_snk')
		);
	 $id=$this->input->post("id_snk");
		if($this->snack->actualizar($id,$datossnackEditado)){
			redirect('Snacks/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}