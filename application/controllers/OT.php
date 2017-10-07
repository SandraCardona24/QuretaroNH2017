<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OT extends CI_Controller {

	public function __construct(){
		parent:: __construct();
		$this->load->model("OT_model");
	}
	
	public function index(){		

		$estatus = $this->getEstatus();	
		$proyectos = $this->getProyecto();
		$data = array(
			'estatus' => $estatus,
			'proyectos' => $proyectos);

		$vista['vista'] = $this->load->view('agregarOT_view', $data, TRUE);

		$this->load->view("dashboard_view", $vista);
	}

		public function EditarOT(){
		

		$estatus = $this->getEstatus();
		$ordenes = $this->getOrdenes();
		$proyectos = $this->getProyecto();
		$data = array(
			'estatus' => $estatus,
			'ordenes' => $ordenes,
			'proyectos' => $proyectos);
		$vista['vista'] = $this->load->view('editarOT_view', $data, TRUE);

		$this->load->view("dashboard_view", $vista);
	}

	public function getEstatus() {
		
		$datos['estatus'] = $this->OT_model->selectEstatus();
		return $datos;
	}

	public function getProyecto() {
		
		$datos['proyecto'] = $this->OT_model->selectProyecto();
		return $datos;
	}

	public function getOrdenes(){

		$datos['ordenes'] = $this->OT_model->selectOTs();

		return $datos;
	}

	public function insertOrden() {
		$fecha_ini = $this->input->post('fec_in');
		//mm/dd/YYYY
		$anio = substr($fecha_ini, -4);
		$dia = substr($fecha_ini, 3, 2);
		$mes = substr($fecha_ini, 0, 2);

		$fechaIn = $anio . "/" . $mes . "/" . $dia;

		$fecha_ter = $this->input->post('fec_fin');
		
		$anio = substr($fecha_ter, -4);
		$dia = substr($fecha_ter, 3, 2);
		$mes = substr($fecha_ter, 0, 2);

		$fechaFin = $anio . "/" . $mes . "/" . $dia;
		
		$data = array(
			'DESC_OT' => $this->input->post('desc'),
			'HORAS_OT' => $this->input->post('horas'),
			'FEC_IN_OT' => $fechaIn,
			'FEC_FN_OT' => $fechaFin,
			'ID_ESTATUS' => $this->input->post('id_estatus'),
			'LIDER_CLIENTE_OT' => $this->input->post('lider'),
			'ID_PROYECTO' => $this->input->post('id_proyecto')
		);


		$this->OT_model->insertOT($data);
		$this->index();	
	}

	public function updateOrden() {

		$id = $this->input->post("id_ot");

		if ($id != 0) {

			$data = array(
				'desc_ot' => $this->input->post('desc'),
				'horas_ot' => $this->input->post('horas'),
				'fec_in_ot' => $this->input->post('fec_in'),
				'fec_fn_ot' => $this->input->post('fec_fin'),
				'id_estatus' => $this->input->post('id_estatus'),
				'lider_cliente_ot' => $this->input->post('lider'),
				'id_proyecto' => $this->input->post("id_proyecto")
			);
			
			$this->OT_model->updateOT($id, $data);
			$this->EditarOT();
		}

	}

	public function getOT() {

		$idOt = $this->input->post("idot");
		$json = array();

		if($idOt == NULL){

			$json['response_code'] = '500';

		}else{

			$ot = array();
			$ot = $this->OT_model->getOtById($idOt);

			if(!is_null($ot)){
				$json['response_code'] = '200';
				$json['ot'] = $ot;
			}else{
				$json['response_code'] = '500';
			}

		}
		
		echo json_encode($json);

	}

	public function deleteOrden() {
		$id = $this->input->post('id');

		if ($id != 0) {
			$this->OT_model->deleteOT($id);
		}
	}
	public function cancelar_ot(){
		$id = $this->input->post("idOT");
		$json = array();

		if ($id == NULL) {
			$json['response_code'] = 500;

		}else{
			if ($this->OT_model->cancelar_ot($id)) {
				$json['response_code'] = '200';
			}else{
				$json['response_code'] = '500';
			}
		}
		echo json_encode($json);
	}
}