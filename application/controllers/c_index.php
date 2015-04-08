<?php if ( ! defined('BASEPATH'))
exit('No direct script access allowed');

class C_index extends CI_Controller {
	function __construct(){
			parent:: __construct();
			$this->load->library('session');
			$this->load->helper('form');
          	$this->load->helper('url');
			$this->load->library('form_validation');
			$this->load->model('m_index');

	}

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -  
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in 
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('Amorecci/index');
	}

	function login(){

		$user = $this->input->post("txtuser");
		$pass = $this->input->post("txtpassw");
		$this->form_validation->set_rules('txtuser','Username','trim|required');
		$this->form_validation->set_rules('txtpassw','Password','trim|required');

		if ($this->form_validation->run()==FALSE) {
			$this->load->view("Amorecci/index");
		}else{
			if ($this->input->post('btnlogin') == "Aceptar") {
				$users = $this->m_index->get_users($user, $pass);
				if ($users > 0) {
					$data = array(
							'user' => $user,
							'loginuser' => TRUE
							);
					$this->session->set_userdata($data);
					redirect('index.php/c_home');
				}else{
					$this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Usuario y Password incorrectos !</div>');
					redirect("http://localhost/amorecci");
				}
			}else{
					redirect("http://localhost/amorecci");
				}
		}
	}

}