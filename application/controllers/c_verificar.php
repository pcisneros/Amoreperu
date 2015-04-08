<?php if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');

class C_verificar extends CI_Controller {

	function __construct(){
			parent:: __construct();
			$this->load->model('m_verificar');

	}

	function index() {

		$this->load->view("Amorecci/verificar");
	}

	function verify_code(){
		$data = array();
		$cod_prod = $this->input->post("cod_prod");
		$data['codigos'] = $this->m_verificar->show_verify($cod_prod);
		$this->load->view("Amorecci/verificar",$data);
	}
}