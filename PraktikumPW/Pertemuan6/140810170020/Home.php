<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index(){
		$id = $this->input->get('id');
		$this->load->model('M_home');
		$data['response'] = $this->M_home->getData($id);
		$this->load->view('home', $data);
	}

}
