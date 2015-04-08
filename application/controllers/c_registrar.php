<?php if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');

class C_registrar extends CI_Controller {

	
	function __construct(){
			parent:: __construct();
			$this->load->helper(array('form', 'url'));
			$this->load->helper('string');
			$this->load->helper('security');
			$this->load->library('session');
			$this->load->library('form_validation');
			$this->load->model('m_registrar');
			$this->load->model('m_email');
		}

	public function index()
	{
		
		$this->load->view('Amorecci/registrar');
	}

	
	function save(){

		$this->form_validation->set_rules('nombre','Nombres','trim|required');
		$this->form_validation->set_rules('apellido','Apellidos','trim|required');
		$this->form_validation->set_rules('email','Email','trim|required');
		$this->form_validation->set_rules('nombre','Nombres','trim|required');
		$this->form_validation->set_rules('nombre','Nombres','trim|required');

		if ($this->form_validation->run()==FALSE) {
			$this->load->view("Amorecci/registrar");
		}else{
			$data  = array(
				// 'id' => $this->input->post("id"),
				'nombres' => $this->input->post ("nombre"),
				'apellidos' => $this->input->post("apellido"),
				'email' => $this->input->post("email"),
				'nom_user' => $this->input->post("user"),
				'pass' => $this->input->post("password"),
				'confirm_pass' => $this->input->post("repassword"),
				'email_code_verify' =>random_string('alnum',30),
				'estado' => "0",
			 );
				$pass = $data['pass'];
			 	$confirm = $data['confirm_pass'];
			 	$destinatario = $data['email'];
			 	$vericode = $data['email_code_verify'];
			 	if ($pass == $confirm) {
			 		$this->m_registrar->insert_users($data);
			 		 $this->email->from('info@mcontrolgroup.com','Amorecci');
					 $this->email->reply_to('info@mcontrolgroup.com');
					 $this->email->to($destinatario);
					 $this->email->subject('Confirmacion de Correo');
					 $this->email->message("Estimado <b>" . $data['nombres'] .",</b><br><br>Gracias por Registrarte en Amorecci, para confirmar el registro sigue este link http://www.amoreperu.com/amorecci/index.php/c_registrar/verify/".$vericode. ", por seguridad no debes responder a este correo. <br>Gracias. <br><b>Grupo Amorecci.</b>");
					 // $this->email->message("Estimado <b>" . $data['nombres'] .",</b><br><br>Gracias por Registrarte en Amorecci, para confirmar el registro sigue este link http://www.amoreperu.com/amorecci/".$vericode. ", por seguridad no debes responder a este correo. <br>Gracias. <br><b>Grupo Amorecci.</b>");
					 $this->email->send();
					 $this->session->set_flashdata('Registrado', '<div class="alert alert-success text-center"><b>¡Muchas Gracias! </b> por registrarse en Amorecci, le hemos enviado un correo de verificación.</div>');
					 redirect('http://localhost/amorecci/index.php/c_registrar');
				 }else{
				 	$this->session->set_flashdata('Erroreg', '<div class="alert alert-danger text-center"><b>¡Error!</b> Las contraseñas no coinciden, intente nuevamente.</div>');
					 redirect('http://localhost/amorecci/index.php/c_registrar');

				 }		 
		}	
	}

	function verify($verifyhash = NULL){
		$nrecords = $this->m_registrar->verifyemailaddress($verifyhash);
		if ($nrecords > 0) {
			$this->session->set_flashdata('Sucess', '<div class="alert alert-success text-center"><b>¡Felicidades!</b> su cuenta ya ha sido activada, ahora puede ir a <a href="http://amoreperu.com/amorecci/">Login</a> para iniciar sesion.</div>');
			redirect('http://www.amoreperu.com/amorecci/index.php/c_registrar');
		}else{
			$this->session->set_flashdata('Error', '<div class="alert alert-danger text-center"><b>¡Error!</b> No se pudo verificar la cuenta, intente nuevamente.');
			redirect('http://www.amoreperu.com/amorecci/index.php/c_registrar');
		}
	}

	
}

