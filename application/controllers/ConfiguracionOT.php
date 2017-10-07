<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Noé Ramos
 * @version 0.1
 * @copyright NEORIS, Todos los derechos reservados 2017
*/
class ConfiguracionOT extends CI_Controller {

	/**
	*funcion constrcutor de la clase Recursos
	*/
	public function __construct(){
		parent:: __construct();
		$this->load->model("ConfiguracionOT_model");
	}

	/**
	*Funcion para mostrar la vista
	*/
	public function index(){
		$datos = array();
		$datos['recursos'] = $this->ConfiguracionOT_model->getRecursos();
		$datos['proyectos'] = $this->ConfiguracionOT_model->getProyectos();
		$datos['ordenes'] = $this->ConfiguracionOT_model->getOrdenes();

		$fragment1 = array();
		$fragment1['vista'] = $this->load->view("configurarOT_view",$datos, TRUE);

		$this->load->view("dashboard_view", $fragment1);
	}

	public function editarTO(){
		$datos = array();
		$datos['recursos'] = $this->ConfiguracionOT_model->getRecursos();
		$datos['proyectos'] = $this->ConfiguracionOT_model->getProyectos();
		$datos['ordenes'] = $this->ConfiguracionOT_model->getOrdenes();

		$fragment1 = array();
		$fragment1['vista'] = $this->load->view("configurarOT_edit_view",$datos, TRUE);

		$this->load->view("dashboard_view", $fragment1);
	}

	public function selectCombo(id){
		$id_proy = $this->this->post("id_proy");
		$json = array();
		if ($id_proy == NULL) {
			$json["response_code"] = 500;
		}else{
			this->ConfiguracionOT_model->
		}
	}
}	