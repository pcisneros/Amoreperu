<?php if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');

class M_index extends CI_Model {

	function __construct(){
		parent:: __construct();
	}

	function get_users($user, $pass){
		$sql= "select nom_user,pass from users WHERE nom_user = '". $user ."' and pass='". $pass ."'";
		$query = $this->db->query($sql);
		return $query->num_rows();

	}

	function get_status(){
		$sql= "select nom_user,pass, estado from users WHERE nom_user = '". $user ."' and pass='". $pass ."' and estado = 1";

	}

}

