<?php if ( ! defined('BASEPATH')) exit('no direct script access allowed ') {
	/**
	* 
	*/
	class Main extends CI_Controller {
		
		public function __construct()
		{
			parent::__construct();
		}
		public function index(){
			$this->load->view('main');
		}
	}
} ?>