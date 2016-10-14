<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student extends CI_Controller {

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
		$this->load->view('header');
		$this->load->view('welcome_message');
		$this->load->view('footer');
	}

	public function showProfile()
	{	
		$db = $this->load->database('default', TRUE);
		$id = $this->session->userdata('id_user');
		$result = $db->query("SELECT * 
							FROM user_profiles u, student_profiles s
							WHERE u.id = s.id_user 
							AND s.id_user = $id")->result();
		$this->load->view('header');
		$this->load->view('show_profile', $result[0]);
		$this->load->view('footer');
	}

	public function update(){
		$db = $this->load->database('default', TRUE);
		$data = $this->input->post();
		unset($data['dp']);
		unset($data['email']);
		$id = $this->session->userdata('id_user');
		$db->where('id_user', $id);
		$db->update('student_profiles', $data);
		$this->do_upload($id);
		redirect('/student/showprofile');
	}

	public function get_profile(){
		$db = $this->load->database('default', TRUE);
		$db->select('*');
		$db->from('scholarships');
		$result = $db->get()->result();
		echo json_encode($result);
	}

	public function do_upload($new_name)
	 {
		 $config['upload_path']          = './uploads/scholarship/';
		 $config['allowed_types']        = 'gif|jpg|png|jpeg';
		 $config['file_name'] 			 = $new_name . ".jpg";
		 $config['overwrite'] 			 = TRUE;

		 $this->load->library('upload', $config);

		 if ( ! $this->upload->do_upload('dp'))
		 {
			 $error = array('error' => $this->upload->display_errors());
			 // redirect('/');
			 var_dump($error);
		 }
		 else
		 {
			 $data = array('upload_data' => $this->upload->data());
			 // redirect('/');
		 }
	 }
}
