<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {

    public function login_user($username, $password) {

        $this->db->where('username', $username);

        $result = $this->db->get('users');

        $db_password = $result->row(4)->password;

        if (password_verify($password, $db_password)) {
            
            return $result->row(0)->id;
        } else {

            return false;

        }
    }

    public function create_user() {

        $options = ['cost' => 12];

        $encripted_pass = password_hash($this->input->post('password'), PASSWORD_BCRYPT, $options);

        $data = array(
            'first_name' => $this->input->post('f_name'),
            'last_name' => $this->input->post('l_name'),
            'email' => $this->input->post('email'),
            'username' => $this->input->post('username'),
            'password' => $encripted_pass,
            'avatar' => 'https://myoctocat.com/assets/images/octocats/octocat-16.png',
            'music_genre_id' => $this->input->post('music_genre_id'),
        );

        $insert_data = $this->db->insert('users', $data);

        return $insert_data;
    }
}

?>