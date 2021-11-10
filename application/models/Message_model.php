<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends CI_Model {

    public function get_messages()
    {

        $user_id = $this->session->userdata('user_id');


    $query = $this->db->query("
        SELECT messages.body, messages.image, messages.date, users.first_name, users.last_name, users.avatar, users.username
        FROM messages
        INNER JOIN users
        ON  messages.user_id=users.id
        WHERE messages.user_id = '$user_id'
        OR messages.user_id IN(
        SELECT follower_id
        FROM followers
        WHERE followers.user_id = '$user_id'
        )
        ORDER BY messages.id DESC
    ");

    # Source - https://stackoverflow.com/a/35664340/8539515

    return $query->result_array();
    }

    public function get_profile_messages($username)
    {
        $this->db->where('username', $username);
        $query = $this->db->get('users');
        $user_id = $query->row()->id;

        $this->db->select('
            messages.body,
            messages.image,
            messages.date,
            users.first_name,
            users.last_name,
            users.avatar,
            users.username
        ');

        $this->db->from('messages');
        $this->db->join('users', 'users.id = messages.user_id');
        $this->db->where('messages.user_id', $user_id);
        $this->db->order_by('messages.id', 'DESC');
        $query = $this->db->get();

        return $query->result();
    }

    public function create_message($data)
    {
        $insert_query = $this->db->insert('messages', $data);

        return $insert_query;
    }
}

?>