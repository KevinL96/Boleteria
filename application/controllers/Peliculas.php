<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Peliculas extends CI_Controller
{

	// definiendo el constructor de la clase 
	public function __construct()
	{
		parent::__construct();
		$this->load->model("pelicula"); //llamamos al modeelo 
	}


	public function index()
	{
		
		$data["listadoPeliculas"] = $this->pelicula->obtenerTodos(); //se hace la consulta
		
		$this->load->view('header');
		$this->load->view('peliculas/index.php', $data);
		$this->load->view('footer');
	}
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('peliculas/nuevo.php');
		$this->load->view('footer');
	}
	// funcion para capturar los valores del formulario nuevo 


	public function guardarPelicula()
	{
		// error_reporting(0);
		//desactivar los errores 
		$datosNuevaPelicula = array(
			//posicion dentreo del array 
			"nombre_pel" => $this->input->post('nombre_pel'),
			"genero_pel" => $this->input->post('genero_pel'),
			"autor_pel" => $this->input->post('autor_pel'),
			"sinopsis_pel" => $this->input->post('sinopsis_pel'),
			"clasificacion_pel" => $this->input->post('clasificacion_pel'),
            "fecha_estreno_pel" => $this->input->post('fecha_estreno_pel')

		);
		print_r($datosNuevaPelicula);
		if ($this->pelicula->insertar($datosNuevaPelicula)) {

			redirect('peliculas/index');
		} else {
			echo "<h1>Error</h1>";
		}

	}

	public function borrar($id_pel)
	{
		if ($this->pelicula->eliminarPorId($id_pel)) {
			echo "Eliminado";
			redirect('Peliculas/index');

		} else {
			echo "Error al eliminar :c ";
		}
	}


	public function actualizar($id)
	{
		$data["peliculaEditar"] = $this->pelicula->obtenerPorId($id);
		$this->load->view('header');
		$this->load->view('Peliculas/actualizar', $data);
		$this->load->view('footer');


	}
	// public function procesarActualizacion()
	// {
	// 	// error_reporting(0);
	// 	//desactivar los errores 
	// 	$datospeliculaEditado = array(
	// 		//posicion dentreo del array 
	// 		"cedula_est" => $this->input->post('cedula_est'),
	// 		"apellido_est" => $this->input->post('apellido_est'),
	// 		"nombre_est" => $this->input->post('nombre_est'),
	// 		"telefono_est" => $this->input->post('telefono_est'),
	// 		"direccion_est" => $this->input->post('direccion_est'),
	// 		"fecha_nacimiento_est" => $this->input->post('fecha_nacimiento_est')
	// 	);
	// 	$id=$this->input->post("id_est");
	// 	if ($this->pelicula->actualizar($id,$datospeliculaEditado)) {

	// 		redirect('Peliculas/index');
	// 	} else {
	// 		echo "<h1>Error</h1>";
	// 	}
	// }

	public function procesarActualizacion(){
		$datospeliculaEditado=array(
            "nombre_pel" => $this->input->post('nombre_pel'),
			"genero_pel" => $this->input->post('genero_pel'),
			"autor_pel" => $this->input->post('autor_pel'),
			"sinopsis_pel" => $this->input->post('sinopsis_pel'),
			"clasificacion_pel" => $this->input->post('clasificacion_pel'),
            "fecha_estreno_pel" => $this->input->post('fecha_estreno_pel')
		);
	 $id=$this->input->post("id_pel");
		if($this->pelicula->actualizar($id,$datospeliculaEditado)){
			redirect('peliculas/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}