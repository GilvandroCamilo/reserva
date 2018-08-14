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

		public function cadastro_noticia(){
		$this->verificar_sessao();
		$dados['noticias'] = $this->db->get('noticia')->result();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('listar_noticias',$dados);
		$this->load->view('includes/html_footer');
	}
		public function cadastrar_noticia(){
		$this->verificar_sessao();
		$data['titulo'] = $this->input->post('titulo');
		$data['resumo1'] = $this->input->post('resumo1');
		$data['resumo2'] = $this->input->post('resumo2');
		$data['resumo3'] = $this->input->post('resumo3');
		// $data['imagem1'] = $this->input->post('imagem1');
		$now = new DateTime();



		$config['upload_path'] = FCPATH . 'assets/uploads';
        $config['allowed_types'] = 'jpg|jpeg|gif|png';
        $config['encrypt_name'] = TRUE;
        $this->load->library("upload", $config);
        if ($this->upload->do_upload('imagem1')) {
        	$info_arquivo = $this->upload->data();
        	$nome_arquivo = $info_arquivo["file_name"];

        	$data['imagem1'] = base_url() . "assets/uploads/". $nome_arquivo;

        	if($this->upload->do_upload('imagem2')){
         	$info_arquivo = $this->upload->data();
        	$nome_arquivo = $info_arquivo["file_name"];

        	$data['imagem2'] = base_url() . "assets/uploads/" . $nome_arquivo;
        	// var_dump($nome_arquivo);
         }

         	if ($this->upload->do_upload('imagem3')){
         	$info_arquivo = $this->upload->data();
        	$nome_arquivo = $info_arquivo["file_name"];

        	$data['imagem3'] = base_url() . "assets/uploads/" . $nome_arquivo;
        	// var_dump($nome_arquivo);	
         }
        	// var_dump($nome_arquivo);
        }
         
      if($this->db->insert('noticia',$data)){
			redirect('usuario/noticias');
		}else{
			redirect('usuario/2');
		}
	}

	public function noticias(){
		$this->verificar_sessao();
		$dados['noticias'] = $this->db->get('noticia')->result();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		$this->load->view('listar_noticias',$dados);
		$this->load->view('includes/html_footer');
	}
	public function editar_noticia($id=null,$indice=null){
		$this->verificar_sessao();
		$data['noticia'] = $this->db->get('noticia')->result();

		$this->load->view('includes/html_header');
		$this->load->view('includes/menu');
		

		if ($indice==1) {
			$data['msg'] = 'Senha alterada com sucesso';
			$this->load->view('includes/msg_sucesso',$data);
		}else if($indice==2){
			$data['msg'] = 'Não foi possível alterar a senha';
			$this->load->view('includes/msg_erro',$data);
		}
		

		$this->load->view('editar_noticia', $data);
		$this->load->view('includes/html_footer');

	}

	public function salvar_edit_noticia(){
			$this->verificar_sessao();

			$id = $this->input->post('idNoticia');

		$data['titulo'] = $this->input->post('titulo');
		$data['resumo1'] = $this->input->post('resumo1');
		$data['resumo2'] = $this->input->post('resumo2');
		$data['resumo3'] = $this->input->post('resumo3');
	
		$this->db->where('idNoticia', $id);
		if($this->db->update('noticia',$data)){
			redirect('usuario/noticias');
		}else{
			redirect('usuario/noticias');
		}
	}







}
