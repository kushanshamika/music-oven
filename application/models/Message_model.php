<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends CI_Model {

    public function get_messages()
    {
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