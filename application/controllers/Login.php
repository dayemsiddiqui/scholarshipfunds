<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

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
	function __construct(){
	    parent::__construct();

	}


	public function index(){
		if($this->session->userdata('is_logged_in')){
      	redirect('/welcome');
     	}
     		redirect('/welcome');     	
	}

	public function login(){
		$this->load->view('header');
		$this->load->view('auth/page-login');
		$this->load->view('footer');
	}

	public function register(){
		$this->load->view('header');
		$this->load->view('auth/page-register');
		$this->load->view('footer');	
	}

	public function create_account(){
		$data = $this->input->post();
		unset($data['dp']);
		$db = $this->load->database('default', TRUE);
		$data['password'] = sha1($data['password']);
		$db->insert('user_profiles', $data);
		$insert_id = $db->insert_id();
		$profile_data =  array(
			'id_user' => $insert_id,
			'name' => '',
			'fathername' => '',
			'address' => '',
			'city' => '', 
			'country' => ''
			);
		$db->insert('student_profiles', $profile_data);
		$id = $db->insert_id();
		$this->do_upload($id);
		redirect('/login/login');
	}


	public function get_insert_route($tablename){
		$route['advance'] = '/Welcome';
		return $route[$tablename];
	}

	public function temp(){
		$this->load->view('base');
		$this->load->view('index');
		$this->load->view('footer');
		$this->load->view('dashboard-script');
		$data = array(
			'notification' => 'You have a new audit assigned to you',
			'delay' => 15000
		);
		$this->load->view('notifications', $data);
	}

	public function get_in(){
		$password = sha1($this->input->post('password'));
		$username = $this->input->post('username');
		// echo $username . "dsadsa";
		$user = $this->crud->get_row_by_parameter('user_profiles', 'username', $username);
		if(!$user){
			// redirect('/');
			echo "User not found";
		}
		elseif($user[0]->password == $password){
			$data = array(
				'username' => $username,
				'role' => $user[0]->account_type,
				'id_user' => $user[0]->id,
				'is_logged_in' => true,
				);
			$this->session->set_userdata($data);
			redirect('/welcome');
			// echo "Logged In Successfully";
		}else{
			// redirect('/');
			echo "Username password mismatch";
		}
	}

	//Json Api For Authentication
	public function get_session(){
		 echo json_encode($this->session->all_userdata());
	}

	public function logout(){
		$array_items = array('username', 'role', 'is_logged_in','id_user');
		$this->session->unset_userdata($array_items);
		redirect('/');
	}

	public function do_upload($new_name)
	 {
		 $config['upload_path']          = './uploads/';
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





