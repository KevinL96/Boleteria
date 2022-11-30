<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Boletos extends CI_Controller
{

	// definiendo el constructor de la clase 
	public function __construct()
	{
		parent::__construct();
		$this->load->model("boleto"); //llamamos al modeelo 
		$this->load->model("pelicula");
        $this->load->model("sala");
	}


	public function index()
	{
		
		$data["listadoBoletos"] = $this->boleto->obtenerTodos(); //se hace la consulta
		$data["listadoPeliculas"]=$this->pelicula->obtenerTodos();
        $data["listadoSalas"]=$this->sala->obtenerTodos();
		
		$this->load->view('header');
		$this->load->view('boletos/index.php', $data);
		$this->load->view('footer');
	}
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('boletos/nuevo.php');
		$this->load->view('footer');
	}
	// funcion para capturar los valores del formulario nuevo 


	public function guardarBoleto()
	{
		// error_reporting(0);
		//desactivar los errores 
		$datosNuevoBoleto = array(
			//posicion dentreo del array 
			"nombre_bol" => $this->input->post('nombre_bol'),
			"cedula_bol" => $this->input->post('cedula_bol'),
			"fecha_bol" => $this->input->post('fecha_bol'),
            "pelicula_bol" => $this->input->post('pelicula_bol'),
            "sala_bol" => $this->input->post('sala_bol')


		);
		print_r($datosNuevoBoleto);
		if ($this->boleto->insertar($datosNuevoBoleto)) {

			redirect('boletos/index');
		} else {
			echo "<h1>Error</h1>";
		}

	}

	public function borrar($id_bol)
	{
		if ($this->boleto->eliminarPorId($id_bol)) {
			echo "Eliminado";
			redirect('boletos/index');

		} else {
			echo "Error al eliminar :c ";
		}
	}


	public function actualizar($id)
	{
		$data["boletoEditar"] = $this->boleto->obtenerPorId($id);
		$this->load->view('header');
		$this->load->view('boletos/actualizar', $data);
		$this->load->view('footer');


	}
	

	public function procesarActualizacion(){
		$datosboletoEditado=array(
            "nombre_bol" => $this->input->post('nombre_bol'),
			"cedula_bol" => $this->input->post('cedula_bol'),
			"fecha_bol" => $this->input->post('fecha_bol'),
            "pelicula_bol" => $this->input->post('pelicula_bol'),
            "sala_bol" => $this->input->post('sala_bol')
		);
	 $id=$this->input->post("id_bol");
		if($this->boletor->actualizar($id,$datosboletoEditado)){
			redirect('boletos/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}