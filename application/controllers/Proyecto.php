<?php
class Proyecto extends CI_Controller {


	public function index()
	{
 
		$this->load->helper("url");
				 
		$this->load->view("alta_proyecto_view");

//		$data = array();
//		$data["consulta_proyecto"] = $this->proyecto_model->consulta_proyectos();
//		$this->load->view('alta_proyecto_view', $data);
		
	}
	public function insertar()
	{ 

		$nom_proyect = $this->input->post('nom_proyect');
		$fecha_ini = $this->input->post('fecha_ini');
		$fecha_ter = $this->input->post('fecha_ter');
		$desc_proyect = $this->input->post('desc_proyect');
		$id_tec = $this->input->post('id_tec');


		$arr_insertar = array();

		$arr_insertar["nom_proyect"] = $nom_proyect;
		$arr_insertar["fecha_ini"] = $fecha_ini;
		$arr_insertar["fecha_ter"] = $fecha_ter;
		$arr_insertar["desc_proyect"] = $desc_proyect;
		$arr_insertar["id_tec"] = $id_tec;
		$arr_insertar["id_estatus"] = '1';

		$this->load->model('proyecto_model');

		if($this->proyecto_model->inserta_proyecto($arr_insertar)) {

			redirect(base_url()."index.php/proyecto");
						
		} 
		
	}

}

