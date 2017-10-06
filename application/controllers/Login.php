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
		$usename = $this->input->post("username");
		$password = $this->input->post("password");
		
		if($usename == "" || $password =="" ){
			$this->session->set_flashdata('error','Los campos esta vacios =(');
			redirect("Login");
		}else{

			$user = $this->Login_model->validateUser($usename);

			if(!is_null($user)){

				if($user->PASSWORD_USR == $password){

				}
			}else{
				$this->session->set_flashdata('error','Los campos esta vacios =(');
				redirect("Login");
			}


		}

	}
}