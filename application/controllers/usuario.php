<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Usuario extends CI_Controller {

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

	public function verificar_sessao(){
        if ($this->session->userdata('logado') == false) {
            redirect('dashboard/login');
        }
    }

	public function index($indice=null){
				$this->verificar_sessao();
		$dados['noticias'] = $this->db->get('noticia')->result();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('listar_noticias',$dados);
		$this->load->view('includes/html_footer');
	}





	public function noticias(){
		
		$this->verificar_sessao();
		$dados['noticias'] = $this->db->get('noticia')->result();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('dashboard',$dados);
		$this->load->view('includes/html_footer');
	}







}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */