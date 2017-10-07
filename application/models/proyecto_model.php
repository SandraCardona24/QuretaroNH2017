<?php class Proyecto_model extends CI_Model {

	public function __construct(){
		$this->load->database();
	}

	public function inserta_proyecto($data) {

		$this->db->insert('proyecto', $data);

		return TRUE;

	} 

	public function consulta_proyectos(){
		$query = $this->db->query("SELECT pry.ID_PROYECT, pry.NOM_PROYECT, pry.DESC_PROYECT, NOMBRE_TEC, pry.FECHA_INI, 
										pry.FECHA_TER, DESC_ESTATUS, NOMBRE_OFI, pry.ID_ESTATUS FROM 
										proyecto pry inner join tecnologia tec on pry.ID_TEC = tec.ID_TEC 
										inner join ESTATUS est on pry.ID_ESTATUS = est.ID_ESTATUS 
										inner join OFICINA ofi on pry.ID_OFICINA = ofi.ID_OFICINA");

		return ($query->num_rows() <= 0) ? NULL : $query->result(); 
	}

	public function consulta_tecnologias(){
		$query = $this->db->query("SELECT ID_TEC, NOMBRE_TEC FROM tecnologia");
		return ($query->num_rows() <= 0) ? NULL : $query->result(); 
	}

	public function consulta_oficinas(){
		$query = $this->db->query("SELECT ID_OFICINA, NOMBRE_OFI FROM oficina");
		return ($query->num_rows() <= 0) ? NULL : $query->result(); 
	}

	public function cancelar_proyecto($id){
		$this->db->set("ID_ESTATUS", 3);
		$this->db->where("ID_PROYECT",$id);
		$this->db->update("PROYECTO");
		return TRUE;
	}

	public function editar_proyecto(){
		$query = $this->db->query("SELECT NOM_PROYECT, DESC_PROYECT, ID_TEC, FECHA_INI, FECHA_TER, ID_ESTATUS, ID_OFICINA FROM proyecto");
		return ($query->num_rows() <= 0) ? NULL : $query->row(); 
	}
	public function combo_estatus(){
		$query = $this->db->query("SELECT ID_ESTATUS, DESC_ESTATUS, TIPO_ESTATUS FROM estatus where TIPO_ESTATUS ='p'");
			return ($query->num_rows() <= 0) ? NULL : $query->result(); 
	}	

} 


