<?php class Proyecto_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function inserta_proyecto($data) {

		$this->db->insert('proyecto', $data);

		return TRUE;

	} 

	public function consulta_proyectos(){
		$query = $this->db->query("SELECT * FROM proyecto order by id_proyect DESC");

		return ($query->num_rows() <= 0) ? NULL : $query->result(); 
	}

	public function consulta_tecnologias(){
		$query = $this->db->query("SELECT * FROM tecnologia");
		return ($query->num_rows() <= 0) ? NULL : $query->result(); 
	}

	public function consulta_oficinas(){
		$query = $this->db->query("SELECT * FROM oficina");
		return ($query->num_rows() <= 0) ? NULL : $query->result(); 
	}

} 


