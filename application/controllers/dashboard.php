<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller {

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
	public function index(){
		
		$dados['quiosques'] = $this->db->get('quiosque')->result();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('dashboard',$dados);
		$this->load->view('includes/html_footer');
	}
	
	public function alugar($id){

		$data['locatario'] = $this->input->post('nome');
		$data['telefoneLocat'] = $this->input->post('telefone');
		$data['situacao'] = "alugada";
		$id = $this->input->post('idquiosque');
		$this->db->where('idquiosque', $id);

		if($this->db->update('quiosque',$data)){
			redirect('http://localhost/reserva/');
		}else{
			redirect('usuario/6');
		}

	}
	public function escolher_quiosque($id){
		$idQuiosque = $this->input->post('Nquiosque');
		$this->db->where('idquiosque',$id);
		$dados['quiosque'] = $this->db->get('quiosque')->result();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('quiosque',$dados);
		$this->load->view('includes/html_footer');
	}





	public function cadastro(){
	
		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('cadastrarQuiosque');
		$this->load->view('includes/html_footer');		
	}
	public function cadastrar(){
		$data['locador'] = $this->input->post('nome');
		$data['local'] = $this->input->post('local');
		$data['valor'] = $this->input->post('valor');
		$data['descricao'] = $this->input->post('descricao');
		$data['telefone'] = $this->input->post('telefone');
		$data['situacao'] = "não alugada";
		$data['data'] = date("j/n/Y");
		$config['upload_path'] = FCPATH . 'assets/uploads';
		$config['allowed_types'] = 'jpg|jpeg|gif|png|pdf';
		$config['encrypt_name'] = TRUE;
		$this->load->library("upload", $config);
		if ($this->upload->do_upload('imagem')) {
		   	$info_arquivo = $this->upload->data();
		   	$nome_arquivo = $info_arquivo["file_name"];

		  	$data['imagem'] = base_url() . "assets/uploads/". $nome_arquivo;
		}
		if ($this->db->insert('quiosque', $data)) {
			redirect('dashboard');
		}

	}


}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */