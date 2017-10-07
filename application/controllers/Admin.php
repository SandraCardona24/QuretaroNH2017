<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Alexandro
 * @version 0.1
 * @copyright NEORIS, Todos los derechos reservados 2017
*/
class Login extends CI_Controller {
	/**
	*Funcion constructor del login
	*/

	public function __construct(){
		parent:: __construct();
	}

	/**
	*Funcon para cargar la vista
	*/
	public function index(){
		
		$this->load->view("admin_view");
	}
}