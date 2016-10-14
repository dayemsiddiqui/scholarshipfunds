<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Donation extends CI_Controller {

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

	public function create($id){
		$data['id_scholarship'] = $id;
		$this->load->view('header');
		$this->load->view('donation/create_donation', $data);
		$this->load->view('footer');
	}

	public function insert(){
		$db = $this->load->database('default', TRUE);
		$data = $this->input->post();
		$data['id_user'] = $this->session->userdata('id_user');
		$db->insert('donations', $data);
		redirect('/scholarship/view_details/'.$data['id_scholarship']);
	}


	


	

	
}
