<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if (!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}
	}

	public function index()
	{
        $data['main_view'] = 'home_view';
		$data['messages'] = $this->message_model->get_messages();
		$data['profile_data'] = $this->user_model->profile($this->session->userdata('user_name'));
		$data['nav_bar'] = true;

		$this->load->view('layouts/main', $data);
	}
}
