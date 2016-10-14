<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Scholarship extends CI_Controller {

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

	public function create()
	{	
		auth_check($this);
		$this->load->view('header');
		$this->load->view('create_scholarship');
		$this->load->view('footer');
	}

	public function insert(){
		auth_check($this);
		$db = $this->load->database('default', TRUE);
		$data = $this->input->post();
		unset($data['dp']);
		$data['id_user'] = $this->session->userdata('id_user');
		$db->insert('scholarships', $data);
		$id = $db->insert_id();
		$this->do_upload($id);
		redirect('/');
	}



	public function view_details($id){
		$db = $this->load->database('default', TRUE);
		$result = $db->query("SELECT s.id id_scholarship, s.name name, fathername, s.city city, s.country country, story, address, email, amount, institution, email, username FROM scholarships s, user_profiles p, student_profiles std 
							WHERE s.id_user = p.id
							AND s.id_user = std.id_user
							AND s.id = $id")->result();

		$reviews = $db->query("SELECT * FROM reviews r, user_profiles u
								WHERE id_scholarship = $id
								AND r.id_user = u.id")->result();

		$achieved = $db->query("SELECT SUM(amount) total FROM donations
								WHERE id_scholarship = $id")->result();
		if(!$achieved[0]->total){
			$achieved[0]->total = 0;
		}
		$data['reviews'] = $reviews;
		$data['result'] = $result;
		$data['achieved'] = $achieved;
		$this->load->view('header');
		$this->load->view('scholarship/view_details', $data);
		$this->load->view('footer');
	}

	public function add_review()
	{
		auth_check($this);
		$db = $this->load->database('default', TRUE);
		$data = $this->input->post();
		$data['id_user'] = $this->session->userdata('id_user');
		$this->db->insert("reviews", $data);
		redirect("/scholarship/view_details/".$data['id_scholarship']);
	}

	public function get_scholarships(){
		$db = $this->load->database('default', TRUE);
		$result = $db->query('SELECT *, s.id s_id, s.name studentname FROM scholarships s, user_profiles p, student_profiles std 
							WHERE p.id = s.id_user
							AND p.id = std.id_user')->result();
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
			 // redirect('/ds');
			 var_dump($error);
			 die();
		 }
		 else
		 {
			 $data = array('upload_data' => $this->upload->data());
			 redirect('/');
		 }
	 }
}
