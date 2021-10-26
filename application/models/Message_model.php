<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends CI_Model {

    public function get_messages()
    {
        $query = $this->db->get('messages');

        return $query->result();
    }

    public function get_profile_messages($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        $user_id = $query->row()->id;

        $this->db->where('user_id', $user_id);
        $query = $this->db->get('messages');

        return $query->result();
    }

    public function create_message($data)
    {
        $insert_query = $this->db->insert('messages', $data);

        return $insert_query;
    }
}

?>