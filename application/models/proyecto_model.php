<?php class Proyecto_model extends CI_Model {

	public function inserta_proyecto($data) {

		$this->db->insert('proyecto', $data);

		return TRUE;

	} 

	public function consulta_proyectos(){
		$query = $this->db->query("SELECT * FROM proyecto order by id_proyect DESC");

		if ($query->num_rows() <= 0) 
			return null;
		else 
			return $query->result();
	}

} 


