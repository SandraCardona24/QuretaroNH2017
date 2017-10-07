<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class OT_model extends CI_Model{
	
	
	public function __construct(){
		$this->load->database();
	}

	public function insertOT($datos) {

		$this->db->insert("ORDEN_TRABAJO", $datos);
	}

	public function selectOTs(){

		$this->db->select("ID_OT, DESC_OT, HORAS_OT, FEC_IN_OT, FEC_FN_OT, DESC_ESTATUS, LIDER_CLIENTE_OT, NOM_PROYECT");
		$this->db->from("ORDEN_TRABAJO");
		$this->db->join("ESTATUS","ORDEN_TRABAJO.ID_ESTATUS = ESTATUS.ID_ESTATUS");
		$this->db->join("PROYECTO","ORDEN_TRABAJO.ID_PROYECTO = PROYECTO.ID_PROYECT");

		$query = $this->db->get();
		return ($query->num_rows() <= 0) ? NULL : $query->result(); 
	}

	public function selectEstatus(){

		$this->db->select("*");
		$this->db->from("ESTATUS");
		$this->db->where("TIPO_ESTATUS", "ot");
		$query = $this->db->get();
		return ($query->num_rows() <= 0) ? NULL : $query->result(); 
	}

	public function selectProyecto(){

		$this->db->select("*");
		$this->db->from("PROYECTO");
		$this->db->where("ID_ESTATUS", 4);
		$query = $this->db->get();
		return ($query->num_rows() <= 0) ? NULL : $query->result(); 
	}

	public function updateOT($id, $datos) {

		$this->db->where("ID_OT", $id);
		$this->db->update("ORDEN_TRABAJO", $datos);

	}

	public function deleteOT($id){

		$this->db->where("ID_ESTATUS", $id);
		$this->db->update("ORDEN_TRABAJO", 10);
	}

	public function getOtById($id){
		$query = $this->db->query("SELECT * FROM ORDEN_TRABAJO where ID_OT = " .$id);
		return ($query->num_rows() <= 0) ? NULL : $query->result();
	}

	public function cancelar_ot($id){
		$this->db->set("ID_ESTATUS", 11);
		$this->db->where("ID_OT",$id);
		$this->db->update("ORDEN_TRABAJO");
		return TRUE;
	}

}