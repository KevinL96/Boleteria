<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Trabajadores extends CI_Controller
{

	// definiendo el constructor de la clase 
	public function __construct()
	{
		parent::__construct();
		$this->load->model("trabajador"); //llamamos al modeelo 
		$this->load->model("sucursal");
	}


	public function index()
	{
		
		$data["listadoTrabajadores"] = $this->trabajador->obtenerTodos(); //se hace la consulta
		$data["listadoSucursales"]=$this->sucursal->obtenerTodos();
		
		$this->load->view('header');
		$this->load->view('trabajadores/index.php', $data);
		$this->load->view('footer');
	}
	public function nuevo()
	{
		$this->load->view('header');
		$this->load->view('trabajadores/nuevo.php');
		$this->load->view('footer');
	}
	// funcion para capturar los valores del formulario nuevo 


	public function guardarTrabajador()
	{
		// error_reporting(0);
		//desactivar los errores 
		$datosNuevoTrabajador = array(
			//posicion dentreo del array 
			"nombre_tr" => $this->input->post('nombre_tr'),
			"direccion_tr" => $this->input->post('direccion_tr'),
			"telefono_tr" => $this->input->post('telefono_tr'),
			"genero_tr" => $this->input->post('genero_tr'),
			"sucursal_tr" => $this->input->post('sucursal_tr')

		);
		print_r($datosNuevoTrabajador);
		if ($this->trabajador->insertar($datosNuevoTrabajador)) {

			redirect('trabajadores/index');
		} else {
			echo "<h1>Error</h1>";
		}

	}

	public function borrar($id_tr)
	{
		if ($this->trabajador->eliminarPorId($id_tr)) {
			echo "Eliminado";
			redirect('trabajadores/index');

		} else {
			echo "Error al eliminar :c ";
		}
	}


	public function actualizar($id)
	{
		$data["trabajadorEditar"] = $this->trabajador->obtenerPorId($id);
		$this->load->view('header');
		$this->load->view('trabajadores/actualizar', $data);
		$this->load->view('footer');


	}
	

	public function procesarActualizacion(){
		$datostrabajadorEditado=array(
            "nombre_tr" => $this->input->post('nombre_tr'),
			"direccion_tr" => $this->input->post('direccion_tr'),
			"telefono_tr" => $this->input->post('telefono_tr'),
			"genero_tr" => $this->input->post('genero_tr'),
			"sucursal_tr" => $this->input->post('sucursal_tr')
		);
	 $id=$this->input->post("id_tr");
		if($this->trabajador->actualizar($id,$datostrabajadorEditado)){
			redirect('trabajadores/index');
		}else{
			echo "<h1>ERROR</h1>";
		}
	}

}