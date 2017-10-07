<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Noé Ramos
 * @version 0.1
 * @copyright NEORIS, Todos los derechos reservados 2017
*/
class Login extends CI_Controller {
	/**
	*Funcion constructor del login
	*/

	public function __construct(){
		parent:: __construct();
		$this->load->model("Login_model");
	}
	/**
	*Funcon para cargar la vista
	*/
	public function index(){
		
		$this->load->view("login_view");
	}

	/**
	*funcion para la validaciond el usuario
	*/
	public function userdo(){
		$username = $this->input->post("username");
		$password = $this->input->post("password");
		
		if($username == "" || $password =="" ){
			$this->session->set_flashdata('error','Los campos esta vacios =(');
			redirect("Login");
		}else{

			$user = $this->Login_model->validateUser($username);

			if(!is_null($user)){

				if($user->PASSWORD_USR == $password){

					$datos_usuario = array(

						'id' => $user->ID_USUARIO,
						'name' => $user->NOMBRE_USUARIO
					);
					
					$this->session->set_userdata($datos_usuario);
					redirect("Mapa");

				}else{

					$this->session->set_flashdata('error','Contraseña o usuario incorrecta');
					redirect("Login");
				}

			}else{
				$this->session->set_flashdata('error','El usuario no existe');
				redirect("Login");
			}


		}

	}
}