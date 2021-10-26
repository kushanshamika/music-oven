<div class="container mt-md-5">
    <div class="row">
        <?php 
        
            $data['profile_data'] = $profile_data;
            $data['logout_btn'] = FALSE;
            $data['follow_btn'] = TRUE;
            $this->load->view('users/profile_view', $data); 
        
        ?>
        <div class="col-md-6">

            <?php 

                $data['messages'] = $messages;
                $this->load->view('messages/index', $data); 

            ?>
        </div>
</div>