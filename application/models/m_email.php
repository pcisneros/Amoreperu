<?php if ( ! defined('BASEPATH')) 
exit('No direct script access allowed');

class M_email extends CI_Model {

	function __construct(){
		parent:: __construct();
		$this->load->library('email');
	}

function sendverifyemail($email,$verifytext){

	$config = Array(
		'protocol' => 'smtp',
		'smtp_host' => 'smtp.yourdomain.com',
		'smpt_port' => 465,
		'smtp_user' => 'jc.cisnerosp@gmail.com',
		'smtp_pass' => 'passwordhere',
		'mailtype' => 'hmtl',
		'charset' => 'iso-8859-1',
		'wordwrap' => TRUE
		);

	$this->load->library('email',$config);
	$this->email->set_newline("\r\n");
	$this->email->from('admin@amorecci.com',"Administrador Amorecci");
	$this->email->to($email);
	$this->email->subject("Email de Verificacion");
	$this->email->message("Estimado Usuario,\n por favor, haga clic en el siguiente URL o pegar en su navegador para verificar su direccion de correo electronico \n\n  http://www.yourdomain.com/verify/" . $verifytext . "\n"."\n\n Gracias \ nAdmin Team");
	$this->email->send();
}



}