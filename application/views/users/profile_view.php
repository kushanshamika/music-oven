<div class="col-md-3">
    <div class="card text-center" style="width: 18rem;">
        <img src="<?php echo $profile_data->avatar ?>" class="card-img-top" alt="Profile Avatar">
        <div class="card-body">
            <h4 class="card-title"><?php echo $profile_data->first_name . " " . $profile_data->last_name ?></h5>
            <p class="card-text text-muted">Reggae</p>
        </div>
        <div class="card-body">
            <?php 
                echo form_open('users/logout'); 

                $data = array(
                    'class' => 'btn btn-danger',
                    'name' => 'submit',
                    'value' => 'Logout'
                );

                echo form_submit($data);

                echo form_close(); 
            ?>
        </div>
    </div>
</div>