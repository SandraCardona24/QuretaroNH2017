<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Noé Ramos
 * @version 0.1
 * @copyright NEORIS, Todos los derechos reservados 2017
*/
//CLASE DE Login_model
class ConfiguracionOT_model extends CI_Model{
	
	/**
	*funcion constructor de login_model
	*/
	public function __construct(){
		$this->load->database();
	}

	public function getRecursos(){
		$this->db->select("ID_RECURSO,NOMBRE_REC,APATERNO_REC,AMATERNO_REC");
		$this->db->from("RECURSO");
		$query = $this->db->get();
		return ($query->num_rows() <= 0) ? NULL : $query->result(); 
	}

	public function getProyectos(){
		$this->db->select("ID_PROYECT,NOM_PROYECT");
		$this->db->from("PROYECTO");
		$query = $this->db->get();
		return ($query->num_rows() <= 0) ? NULL : $query->result(); 	
	}


	public function getOrdenes(){
		$this->db->select("ID_OT,DESC_OT");
		$this->db->from("ORDEN_TRABAJO");
		$query = $this->db->get();
		return ($query->num_rows() <= 0) ? NULL : $query->result(); 	
	}

}