<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Noé Ramos
 * @version 0.1
 * @copyright NEORIS, Todos los derechos reservados 2017
*/

class Recurso_model extends CI_Model{

	/**
	*funcion constructor de recurso_model
	*/
	public function __construct(){
		$this->load->database();
	}
	/**
	*funcion para obtner estatus
	*/
	public function getEstat(){
		$this->db->select("ID_ESTATUS,DESC_ESTATUS");
		$this->db->from("ESTATUS");
		$this->db->where("TIPO_ESTATUS","R");
		$query = $this->db->get();
		return ($query->num_rows() <= 0) ? NULL : $query->result(); 
	}
	/**
	*funcion para obtener tecnologia
	*/
	public function getTec(){
		$this->db->select("ID_TEC,NOMBRE_TEC");
		$this->db->from("TECNOLOGIA");
		$query = $this->db->get();
		return ($query->num_rows() <= 0) ? NULL : $query->result(); 
	}
	/**
	*funcion para obtenere los puestos
	*/
	public function getPuesto(){
		$this->db->select("ID_PUESTO,DESC_PUESTO");
		$this->db->from("PUESTO");
		$query = $this->db->get();
		return ($query->num_rows() <= 0) ? NULL : $query->result(); 
	}

	public function getRecursos(){
		$query = $this->db->query('SELECT ID_RECURSO,NOMBRE_REC,APATERNO_REC,AMATERNO_REC,DESC_ESTATUS,ID_TEC_PRI,ID_TEC_SEC,ID_PUESTO FROM RECURSO INNER JOIN ESTATUS ON(RECURSO.ID_ESTATUS = ESTATUS.ID_ESTATUS)');
		return ($query->num_rows() <= 0) ? NULL : $query->result(); 	
	}
	/**
	*funcion para guardar un recurso
	*/
	public function saveRec($datos){
		$this->db->insert('RECURSO',$datos);
		return TRUE;
	}

	/**
	*funcion para actualizar la informacion de un recurso
	*/
	public function updateRec($datos,$id){
		$this->db->where('ID_RECURSO',$id);
		$this->db->update('RECURSO',$datos);
		return TRUE;
	}
	/**
	*funcion para obtener e¿un recurso por id
	*/
	public function getRecursoById($id){
		$this->db->select("ID_RECURSO,NOMBRE_REC,APATERNO_REC,AMATERNO_REC,ID_ESTATUS,ID_TEC_PRI,ID_TEC_SEC,ID_PUESTO");
		$this->db->from("RECURSO");
		$this->db->where("ID_RECURSO",$id);
		$query = $this->db->get();
		return ($query->num_rows() <= 0) ? NULL : $query->result();
	}

	public function eliminarRecurso($id){
		$this->db->set('ID_ESTATUS',21);
		$this->db->where('ID_RECURSO',$id);
		$this->db->update('RECURSO');
		return TRUE;	
	}
}