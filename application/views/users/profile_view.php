<div class="col-md-3">
    <div class="card text-center" style="width: 18rem;">
        <img src="https://ik.imagekit.io/musicoven/tr:w-500,h-500/<?php echo $profile_data->avatar ?>" class="card-img-top" alt="Avatar">
        <div class="card-body">
            <h4 class="card-title"><?php echo $profile_data->first_name . " " . $profile_data->last_name ?></h5>
            <p class="card-text text-muted"><?php echo  element($profile_data->music_genre, $this->config->item('music_genres')); ?></p>
        </div>
        <div class="card-body">
            <?php 

                $hidden = array('folower_id' => $profile_data->id);

                if ($logout_btn) {
                    echo form_open('users/logout'); 

                    $data = array(
                        'class' => 'btn btn-danger',
                        'name' => 'submit',
                        'value' => 'Logout'
                    );
    
                    echo form_submit($data);
    
                    echo form_close(); 
                }

                $user = $this->session->userdata('user_id');
                $follower = $profile_data->id;

                if ($follow_btn && !$this->user_model->is_follow($user, $follower)) {
                    echo form_open('users/follow', '', $hidden); 

                    $data = array(
                        'class' => 'btn btn-primary',
                        'name' => 'submit',
                        'value' => 'Follow'
                    );
    
                    echo form_submit($data);
    
                    echo form_close(); 
                }
            ?>
        </div>
    </div>
</div>