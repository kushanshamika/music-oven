<div class="container mt-md-5">
    <div class="row">
        <?php 
        
            $data['profile_data'] = $profile_data;
            $data['logout_btn'] = TRUE;
            $data['follow_btn'] = FALSE;
            $this->load->view('users/profile_view', $data); 
        
        ?>
        <div class="col-md-6">
            <div class="card border-white p-3 mb-3 me-3">
                <?php

                    $form_attributes = array('id'=>'message_form');
                    $message_input_attributes = array('class'=>'form-control', 'placeholder'=>'Type your message here...', 'name'=>'message', 'rows'=>'4');
                    $input_button_attributes = array('class'=>'btn btn-primary btn-lg', 'value'=>'Post', 'name'=>'submit');

                    echo form_open('message/create', $form_attributes);
                ?>

                <div class="mb-3">
                    <?php echo form_textarea($message_input_attributes); ?>
                </div>

                <div>
                    <?php echo form_submit($input_button_attributes); ?>
                </div>

                <?php echo form_close(); ?>
            </div>

            <?php 

                $data['messages'] = $messages;
                $this->load->view('messages/index', $data); 
                
            ?>
        </div>
    <div class="col-md-3">
        <div class="card border-white p-3">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Following</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Followers</button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                <ul class="list-group list-group-flush">
                    <?php foreach($following as $user): ?>
                        <li class="list-group-item">
                            <img alt="Image placeholder" src="<?php echo $user->avatar; ?>" class="rounded-circle" width="40">
                            <?php echo $user->first_name . " " . $user->last_name; ?>
                            <?php if ($user->friend): ?>
                                <span class="text-muted"> (Friend)</span>
                            <?php endif ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                </div>
                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                <ul class="list-group list-group-flush">
                    <?php foreach($followers as $user): ?>
                        <li class="list-group-item">
                            <img alt="Image placeholder" src="<?php echo $user->avatar; ?>" class="rounded-circle" width="40">
                            <?php echo $user->first_name . " " . $user->last_name; ?>
                            <?php if ($user->friend): ?>
                                <span class="text-muted"> (Friend)</span>
                            <?php endif ?>
                        </li>
                    <?php endforeach; ?>
                </ul>
                </div>
            </div>
        </div>
    </div>
</div>