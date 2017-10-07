<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Alexandro
 * @version 0.1
 * @copyright NEORIS, Todos los derechos reservados 2017
*/
class Admin extends CI_Controller {
	/**
	*Funcion constructor del login
	*/

	public function __construct(){
		parent:: __construct();
		$this->load->model("Admin_model");
	}

	/**
	*Funcon para cargar la vista
	*/
	public function index(){
		$datos = array();
		$datos['proyectos'] = $this->Admin_model->getProyecto();

		$fragment = array();
		$fragment['vista'] = $this->load->view('inicio_view', $datos, TRUE);

		$this->load->view("dashboard_view", $fragment);
	}

	public function idRec(){
		$detalle  = $this->input->post("idRec");
		$json = array();

		if($detalle == NULL){
			$json['response_code'] = '500';
		}else{
			$detalleByProyecto = $this->Admin_model->getDetalle();

			if(!is_null($detalleByProyecto)){
				$json['response_code'] = '200';
				$json['detalles'] = $detalleByProyecto;
			}else{
				$json['response_code'] = '500';
			}
			
		}
		echo json_encode($json);
	}
}