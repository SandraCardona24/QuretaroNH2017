<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Noé Ramos
 * @version 0.1
 * @copyright NEORIS, Todos los derechos reservados 2017
*/
class Recursos extends CI_Controller {

	/**
	*funcion constrcutor de la clase Recursos
	*/
	public function __construct(){
		parent:: __construct();
		$this->load->model("Recurso_model");
	}

	/**
	*Funcion para mostrar la vista
	*/
	public function index(){
		$datos = array();
		$datos['estatus'] = $this->Recurso_model->getEstat();
		$datos['tecnologias'] = $this->Recurso_model->getTec();
		$datos['puestos'] = $this->Recurso_model->getPuesto();
		$datos['recursos'] = $this->Recurso_model->getRecursos();

		$this->load->view("recurso_view",$datos);
	}

	/**
	*funcion para guardar un recurso
	*/
	public function recursoDo(){

		$json = array();
		$identifcador = $this->input->post("ident");
		$nombre = $this->input->post("nombre");
		$paterno = $this->input->post("paterno");
		$materno = $this->input->post("materno");
		$estatus = $this->input->post("id_estatus");
		$tec_ini = $this->input->post("tec_ini");
		$tec_fin = $this->input->post("tec_sec");
		$puesto = $this->input->post("id_puesto");

		//Es un insert
		if($identifcador == NULL || $identifcador == "" || $identifcador == '0'){
			$datos = array();

			if($nombre == "" && $nombre == NULL || $paterno == "" && $paterno == NULL || $materno == "" && $materno == NULL|| $estatus == '0' || $tec_ini == '0' || $tec_fin == '0'){
				$json['response_code'] = '204';
			}else{

				$datos = array();
				$datos['NOMBRE_REC'] = $nombre; 
				$datos['APATERNO_REC'] = $paterno;
				$datos['AMATERNO_REC'] = $materno;
				$datos['ID_ESTATUS'] = $estatus;
				$datos['ID_TEC_PRI'] = $tec_ini;
				$datos['ID_TEC_SEC'] = $tec_fin;
				$datos['ID_PUESTO'] = $puesto;
				//validamos si se hizo el insert
				if($this->model->saveRec($datos)){
					$json['response_code'] = '200';
				}else{
					$json['response_code'] = '500';
				}

			}

		//Es un update 
		}else{

			$datos = array();
			$datos['NOMBRE_REC'] = $nombre; 
			$datos['APATERNO_REC'] = $paterno;
			$datos['AMATERNO_REC'] = $materno;
			$datos['ID_ESTATUS'] = $estatus;
			$datos['ID_TEC_PRI'] = $tec_ini;
			$datos['ID_TEC_SEC'] = $tec_fin;
			$datos['ID_PUESTO'] = $puesto;

			//validamos si se hizo el insert
			if($this->model->updateRec($datos,$identifcador)){
				$json['response_code'] = '200';
			}else{
				$json['response_code'] = '500';
			}			

		}//fin campos nulos

	}//fin recursDO

}