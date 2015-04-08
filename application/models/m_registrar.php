<?php if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');

class M_registrar extends CI_Model {

	function __construct(){
		parent:: __construct();
	}

	function insert_users($data){
		$this->db->insert('users',$data);
		$q = $this->db->affected_rows();
		return $q;
	}

	function verifyemailaddress($vericode){
		$this->db->set('estado', 1);
		$this->db->where('email_code_verify',$vericode);
		$this->db->update('users');
		return $this->db->affected_rows();

	}


	}
