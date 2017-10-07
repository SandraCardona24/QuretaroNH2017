<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Marco Polo 
 * @version 0.1
 * @copyright NEORIS, Todos los derechos reservados 2017
*/

class Mapa extends CI_Controller{
	/**
	*funcion constrcutor de la clase Recursos
	*/
	public function __construct(){
		parent:: __construct();
	}

	/**
	*Funcion para mostrar la vista
	*/
	public function index(){

		$this->load->view("mapa_view");
	}

}