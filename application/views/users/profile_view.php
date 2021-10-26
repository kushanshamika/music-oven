<div class="col-md-3">
    <div class="card text-center" style="width: 18rem;">
        <img src="<?php echo $profile_data->avatar ?>" class="card-img-top" alt="Profile Avatar">
        <div class="card-body">
            <h4 class="card-title"><?php echo $profile_data->first_name . " " . $profile_data->last_name ?></h5>
            <p class="card-text text-muted"><?php echo  element($profile_data->music_genre, $this->config->item('music_genres')); ?></p>
        </div>
        <div class="card-body">
            <?php 

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

                if ($follow_btn) {
                    echo form_open('users/logout'); 

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