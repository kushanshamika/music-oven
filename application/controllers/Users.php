<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use ImageKit\ImageKit;

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

                $this->session->set_flashdata('auth_failed', 'Invalid Username or Password');
                redirect('users/login');

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
        $this->form_validation->set_rules('music_genre_id', 'Music Genre', 'trim|required');

        if ($this->form_validation->run() == FALSE) {

            $data['main_view'] = 'users/register_view';
            $this->load->view('layouts/main', $data);

        } else {

            $config['upload_path']          = './upload/';
            $config['allowed_types']        = 'gif|jpg|png|jpeg';
    
            $this->load->library('upload', $config);
            $this->load->helper('file');
    
            if ($this->upload->do_upload('avatar'))
            {

                $avatar = $this->upload->data('full_path');

                $imageKit = new ImageKit(
                    "public_R4qTf26kydDY9d+CjdF00KoFsgs=",
                    "private_tmvIlITjnoNBWn39ihpGCVXnciQ=",
                    "https://ik.imagekit.io/musicoven" 
                );

                $uploadFile = $imageKit->upload(array(
                    'file' => fopen($avatar, "r"),
                    'fileName' => $this->upload->data('file_name'),
                    'useUniqueFileName' => true,
                ));
                    
                    $file_url = json_decode(json_encode($uploadFile), true);;

                    delete_files('./upload/');
            }

            if ($this->user_model->create_user($file_url['success']['name'])) {
                
                $this->session->set_flashdata('user_registered', 'User has been registered');
                redirect('users/login');
            }
        }
    }

    public function search()
    {

        if (!$this->session->userdata('logged_in')) {
			redirect('users/login');
		}
        
        $data['main_view'] = 'users/search_view';
        $data['search_results'] = $this->user_model->search();

        $this->load->view('layouts/navbar');
        $this->load->view('layouts/main', $data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('users/login');
    }

    public function profile($username)
    {
        $data['main_view'] = 'users/public_view';
		$data['messages'] = $this->message_model->get_profile_messages($username);
        $profile_data = $this->user_model->profile($username);
		$data['profile_data'] = $profile_data;
        $data['following'] = $this->user_model->get_following($profile_data->id);
		$data['followers'] = $this->user_model->get_followers($profile_data->id);
		$data['nav_bar'] = true;

		$this->load->view('layouts/main', $data);
    }

    public function follow()
    {
        $folower_id = $this->input->post('folower_id');

        if ($this->user_model->follow($folower_id)) {
                
            redirect('home/index');
        }
    }
}
