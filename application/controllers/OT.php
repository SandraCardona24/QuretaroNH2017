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
		
		$data = array(
			'DESC_OT' => $this->input->post('desc'),
			'HORAS_OT' => $this->input->post('horas'),
			'FEC_IN_OT' => $this->input->post('fec_in'),
			'FEC_FN_OT' => $this->input->post('fec_fin'),
			'ID_ESTATUS' => $this->input->post('id_estatus'),
			'LIDER_CLIENTE_OT' => $this->input->post('lider'),
			'ID_PROYECTO' => $this->input->post('id_proyecto')
		);


		$this->OT_model->insertOT($data);
		$this->index();	
	}

	public function updateOrden() {

		$id = $this->input->post("idOT");

		if ($idOT != 0) {

			$data = array(
				'desc_ot' => $this->input->post('desc'),
				'horas_ot' => $this->input->post('horas'),
				'fec_inicio' => $this->input->post('fec_in'),
				'fec_fin' => $this->input->post('fec_fin'),
				'id_estatus' => $this->input->post('id_estatus'),
				'lider_cliente' => $this->input->post('lider')
			);
			
			$this->OT_model->updateOT($id, $data);
		}

	}

	public function deleteOrden() {
		$id = $this->input->post('id');

		if ($id != 0) {
			$this->OT_model->deleteOT($id);
		}
	}
}