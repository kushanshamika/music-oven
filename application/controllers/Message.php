<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Message extends CI_Controller {

    public function create()
    {
        $this->form_validation->set_rules('message', 'Message', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            
            redirect('home/index');
        } else {

            $message = $this->input->post('message');

            # Source - https://www.cluemediator.com/find-urls-in-a-string-and-make-clickable-links-in-php
            $url_reg_pattern = "/(((http|https|ftp|ftps)\:\/\/)|(www\.))[a-zA-Z0-9\-\.]+\.[a-zA-Z]{2,3}(\:[0-9]+)?(\/\S*)?/";
            $message_body =  preg_replace($url_reg_pattern, '<a href="$0" target="_blank" rel="noopener noreferrer">$0</a>', $message);

            # Source - https://stackoverflow.com/a/18094815/8539515
            $matches = array();
            $image_reg_pattern = '/https?:\/\/[^\/\s]+\/\S+\.(jpg|png|gif)/';
            preg_match($image_reg_pattern, $message, $matches);
            $image_url =  $matches[0];
            
            $data = array(

                'user_id' => $this->session->userdata('user_id'),
                'body' => $message_body,
                'image' => $image_url,

            );

            if ($this->message_model->create_message($data)) {
                redirect('home/index');
            }
        }
    }

}

?>