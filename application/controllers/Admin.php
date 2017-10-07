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

	public function getDetalle(){
		$detalle  = $this->input->post("idRec");
		$json = array();

		if($detalle == NULL){
			$json['response_code'] = '500';
		}else{
			$detalleByProyecto1 = $this->Admin_model->getDetalleArriba($detalle);
			$detalleByProyecto2 = $this->Admin_model->getDetalleAbajoActiva($detalle);
			$detalleByProyecto3 = $this->Admin_model->getDetalleAbajoInactiva($detalle);

			if(!is_null($detalleByProyecto1)){
				$json['response_code'] = '200';

				$json['detalleA'] = $detalleByProyecto1;
				$json['detalleBa'] = $detalleByProyecto2;
				$json['detalleBb'] = $detalleByProyecto3;
			}else{
				$json['response_code'] = '500';
			}
			
		}
		echo json_encode($json);
	}
}