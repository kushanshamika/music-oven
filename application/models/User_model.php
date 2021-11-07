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
            'music_genre' => $this->input->post('music_genre_id'),
        );

        $insert_data = $this->db->insert('users', $data);

        return $insert_data;
    }

    public function profile($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('users');

       return $query->row();
    }

    public function search()
    {
        $this->db->where('id !=', $this->session->userdata('user_id'));
        $this->db->where('music_genre', $this->input->post('music_genre'));

        $query = $this->db->get('users');

        return $query->result();
    }

    public function follow($folower_id)
    {
        $user = $this->session->userdata('user_id');

        $this->db->where('user_id', $folower_id);
        $query = $this->db->get('followers');

        $friend = FALSE;

        if ($query->num_rows()) {
            $friend = TRUE;

            $data = array(
                'friend' => TRUE
            );

            $this->db->where('follower_id', $user);
            $this->db->where('user_id', $folower_id);
            $this->db->update('followers', $data);
        }

        $data = array(
            'user_id' => $user,
            'follower_id' => $folower_id,
            'friend' => $friend
        );

        $insert_data = $this->db->insert('followers', $data);

        return $insert_data;
    }

    public function is_follow($user_id, $follower_id)
    {
        $this->db->where('follower_id', $follower_id);
        $this->db->where('user_id', $user_id);

        $query = $this->db->get('followers');

        return $query->num_rows();
    }

    public function get_following($user_id)
    {

        $this->db->select('
            followers.friend,
            users.first_name,
            users.last_name,
            users.avatar
        ');

        $this->db->from('followers');
        $this->db->join('users', 'users.id = followers.follower_id');
        $this->db->where('followers.user_id', $user_id);
        $query = $this->db->get();

        return $query->result();
    }

    public function get_followers($user_id)
    {

        $this->db->select('
            followers.friend,
            users.first_name,
            users.last_name,
            users.avatar
        ');

        $this->db->from('followers');
        $this->db->join('users', 'users.id = followers.user_id');
        $this->db->where('followers.follower_id', $user_id);
        $query = $this->db->get();

        return $query->result();
    }
}

?>