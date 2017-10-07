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
		//$datos['ordenes'] = $this->ConfiguracionOT_model->getOrdenes();

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

	public function selectCombo(){
		$id_proy = $this->input->post("identificador");
		$json = array();
		if ($id_proy == NULL) {
			$json["response_code"] = "500";
		}else{
			$ordenProy = $this->ConfiguracionOT_model->getOrdenByProy($id_proy);
			if ($ordenProy == NULL) {
				$json["response_code"] = "500";
			}else{
				$json["response_code"] = "200";
				$json["byProyect"] = $ordenProy;
			}
		}
		echo json_encode($json);
	}
}	