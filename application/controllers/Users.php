<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function login()
	{
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[3]');

        if ($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'users/login_view';
            $this->load->view('layouts/main', $data);
            
        } else {

            $username = $this->input->post('username');
            $password = $this->input->post('password');

            $user_id = $this->user_model->login_user($username, $password);

            if ($user_id) {
                
                $user_data = array(

                    'user_id' => $user_id,
                    'user_name' => $username,
                    'logged_in' => true

                );

                $this->session->set_userdata($user_data);

                $this->session->set_flashdata('login_success', 'You are now logged in');

                redirect('home/index');

            } else {

                redirect('home/index');

            }
        }
	}

    public function register()
    {

        $this->form_validation->set_rules('f_name', 'First Name', 'trim|required');
        $this->form_validation->set_rules('l_name', 'Last Name', 'trim|required');
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required|min_length[8]');
        $this->form_validation->set_rules('re_password', 'Confirm Password', 'trim|required|matches[password]');
        $this->form_validation->set_rules('music_genre_id', 'Music Genre', 'trim|required|numeric');

        if ($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'users/register_view';
            $this->load->view('layouts/main', $data);

        } else {

            if ($this->user_model->create_user()) {
                
                $this->session->set_flashdata('user_registered', 'User has been registered');
                redirect('users/login');
            }
        }
    }
}
