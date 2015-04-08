<?php if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');

class M_verificar extends CI_Model {

	function __construct(){
		parent:: __construct();
		$this->load->library('session');
	}


	function show_verify($cod_prod){
			$this->db->select('cod_prod,desc_prod');
			$this->db->where('cod_prod',$cod_prod);
			$q = $this->db->get('prod_purchased');
			if ($q->num_rows() > 0) {
			return $q;
			}else{
				$this->session->set_flashdata('ev', '<div class="alert alert-danger text-center"><b>¡Error!</b> el código no existe.</div>');
				redirect('http://localhost/amorecci/index.php/c_verificar/');
		}	
	}
	
}