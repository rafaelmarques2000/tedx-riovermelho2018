<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mobile extends CI_Controller {

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
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('mobile');
	}

	function enviaremail(){

		 $dados = $this->input->post();
		 $nome = $dados['nome'];
		 $telefone = $dados['telefone'];
		 $email = $dados['email'];
		 $assunto = $dados['assunto'];
		 $mensagem = $dados['mensagem'];
		 
		 $this->email->from('', 'Formulario de contato site Tedx');
		 $this->email->to('contato@tedxriovermelho.com');
		 $this->email->subject('Contato formulario site Tedx');
		 $this->email->message("

			    <p>Mensagem automática enviada pelo site tedx por um visitante:</p>

				 <table border='1' style='width:100%'>
					 <tr>
						 <th>Nome</th>
						 <td>$nome</td>
					 </tr>
					 <tr>
						 <th>Telefone</th>
						 <td>$telefone</td>
					 </tr>
					 <tr>
						 <th>Email</th>
						 <td>$email</td>
					 </tr>
					 <tr>
						 <th>Assunto</th>
						 <td>$assunto</td>
					 </tr>

					 <tr>
					 <th>Mensagem</th>
					 <td>$mensagem</td>
				 </tr>
				  
				 </table>
		 ");

		 if($this->email->send(false)){
			 echo json_encode(array("ok"=>1));
		 }else{
			echo json_encode(array("ok"=>0));
		 }

	}


}
