<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Noé Ramos
 * @version 0.1
 * @copyright NEORIS, Todos los derechos reservados 2017
*/
//CLASE DE Login_model
class Login_model extends CI_Model{
	
	/**
	*funcion constructor de login_model
	*/
	public function __construct(){
		$this->load->databases();
	}

	/**
	*funcion para validar al usuario
	*/
	public function validateUser($name){
		$this->db->select("ID_USUARIO,NOMBRE_USUARIO,PASSWORD_USR,ID_RECURSO,ID_ESTAT");
		$this->db->from("USUARIO");
		$this->db->where("NOMBRE_USUARIO = BINARY",$name);
		$this->db->where("ID_ESTAT",20);
		$query = $this->db->get();
		return ($query->num_rows() <= 0) ? NULL : $query->row(); 
	}

}