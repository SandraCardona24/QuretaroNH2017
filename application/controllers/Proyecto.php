<?php
class Proyecto extends CI_Controller {


	public function __construct(){
		parent:: __construct();
		$this->load->model("Proyecto_model");
	}



	public function index(){

		$data = array();
		$data['proyectos'] = $this->Proyecto_model->consulta_proyectos();
		$data['tecnologia'] = $this->Proyecto_model->consulta_tecnologias();
		$data['estatus'] = $this->Proyecto_model->combo_estatus();
		$data['oficina'] = $this->Proyecto_model->consulta_oficinas();	
	

		$vista['vista'] = $this->load->view('agregarProyecto_view', $data, TRUE);
 
		$this->load->view('dashboard_view', $vista);		
		
	}

	public function insertar() { 

		$nom_proyect = $this->input->post('nom_proyect');
		$fecha_ini = $this->input->post('fecha_ini');
		$fecha_ter = $this->input->post('fecha_ter');
		$desc_proyect = $this->input->post('desc_proyect');
		$id_tec = $this->input->post('id_tec');
		$id_ofi = $this->input->post('id_oficina');
		//mm/dd/YYYY
		$anio = substr($fecha_ini, -4);
		$dia = substr($fecha_ini, 3, 2);
		$mes = substr($fecha_ini, 0, 2);

		$fechaIn = $anio . "/" . $mes . "/" . $dia;

		$anio = substr($fecha_ter, -4);
		$dia = substr($fecha_ter, 3, 2);
		$mes = substr($fecha_ter, 0, 2);

		$fechaFin = $anio . "/" . $mes . "/" . $dia;

		$arr_insertar = array();

		$arr_insertar["nom_proyect"] = $nom_proyect;
		$arr_insertar["fecha_ini"] = $fechaIn;
		$arr_insertar["fecha_ter"] = $fechaFin;
		$arr_insertar["desc_proyect"] = $desc_proyect;
		$arr_insertar["id_tec"] = $id_tec;
		$arr_insertar["id_estatus"] = '4';
		$arr_insertar["id_oficina"] = $id_ofi;

		$this->load->model('proyecto_model');

		if($this->proyecto_model->inserta_proyecto($arr_insertar)) {

			redirect(base_url()."index.php/proyecto");
						
		} 		
	}

	public function cancelar_proyecto(){
		$idProyecto = $this->input->post("identificador");
		$json = array();

		if ($idProyecto == NULL) {
			$json['response_code'] = 500;

		}else{
			if ($this->Proyecto_model->cancelar_proyecto($idProyecto)) {
				$json['response_code'] = '200';
			}else{
				$json['response_code'] = '500';
			}
		}
		echo json_encode($json);
	}

	public function editar(){

		$id_proyect = $this->input->post("id_proy");

		$data = array();
		$data['proyectos'] = $this->Proyecto_model->consulta_proyectos();
		$data['tecnologia'] = $this->Proyecto_model->consulta_tecnologias();
		$data['oficina'] = $this->Proyecto_model->consulta_oficinas();
		$data['estatus'] = $this->Proyecto_model->combo_estatus();
		$data['edicion'] = $this->Proyecto_model->editar_proyecto();

		$vista['vista'] = $this->load->view("editarProyecto_view", $data, TRUE);


		$this->load->view("dashboard_view", $vista);


	}

}
