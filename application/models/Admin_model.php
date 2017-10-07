<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Noé Ramos
 * @version 0.1
 * @copyright NEORIS, Todos los derechos reservados 2017
*/
//CLASE DE Admin_ model
class Admin_model extends CI_Model{
	
	/**
	*funcion constructor de login_model
	*/
	public function __construct(){
		$this->load->database();
	}

	public function getProyecto(){
		$query = $this->db->query("SELECT A.NOM_PROYECT, A.DESC_PROYECT, B.DESC_OT, A.ID_PROYECT FROM PROYECTO A inner join ORDEN_TRABAJO B ON A.ID_PROYECT = B.ID_PROYECTO;");
		return ($query->num_rows() <= 0) ? NULL : $query->result(); 
	}

	public function getDetalle(){


	}

}

/*
SELECT PRO.FECHA_TER, RE.NOMBRE_REC , RE.APATERNO_REC,RE.AMATERNO_REC,RE.ID_ESTATUS, OT.ID_OT, OT.DESC_OT, OT.HORAS_OT, OT.FEC_IN_OT, OT.FEC_FN_OT, OT.ID_ESTATUS, EST1.desc_estatus desc_estatus_OT, OT.LIDER_CLIENTE_OT, OT.ID_PROYECTO,PRO.NOM_PROYECT ,RE.ID_RECURSO,TA.DESC_TA, TA.FEC_IN_TA, TA.FEC_FN_TA, TA.HORAS_TA 
FROM orden_trabajo OT inner join proyecto PRO on PRO.ID_PROYECT = OT.ID_PROYECTO inner join det_rec_proy DOR ON OT.ID_OT=DOR.ID_OT inner join recurso RE on RE.ID_RECURSO=DOR.ID_RECURSO left join tarea TA on TA.ID_TA=DOR.ID_TAREA left join estatus EST1 on OT.ID_ESTATUS=EST1.ID_ESTATUS 


*/