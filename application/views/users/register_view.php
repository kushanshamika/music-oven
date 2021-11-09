<div class="row">
    <div class="col-md-6">
        <div class="container d-flex h-100">
            <div class="row align-self-center w-100">
                <div class="mx-auto">
                    <div class="jumbotron">
                        <img src="<?php echo base_url(); ?>assets/images/register-bg.png" class="img-fluid mt-md-5" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class="col-md-6">
        <div class="container d-flex h-100">
            <div class="row align-self-center w-100">
                <div class="mx-auto">
                    <div class="jumbotron">
                    <img src="<?php echo base_url(); ?>assets/images/logo.png" class="img-fluid mt-md-5" alt="Responsive image">

                    <?php echo validation_errors("<p class='text-danger'>"); ?>

                        <?php

                        if ($this->session->flashdata('errors')) {
                            echo $this->session->flashdata('errors');
                        }

                        $options = $this->config->item('music_genres');

                        $form_attributes = array('id'=>'login_form', 'class'=>'mt-md-5');
                        $fname_input_attributes = array('class'=>'form-control', 'placeholder'=>'First Name', 'name'=>'f_name');
                        $lname_input_attributes = array('class'=>'form-control', 'placeholder'=>'Last Name', 'name'=>'l_name');
                        $username_input_attributes = array('class'=>'form-control', 'placeholder'=>'Username', 'name'=>'username');
                        $email_input_attributes = array('class'=>'form-control', 'placeholder'=>'Email', 'name'=>'email');
                        $file_input_attributes = array('class'=>'form-control', 'name'=>'avatar');
                        $password_input_attributes = array('class'=>'form-control', 'placeholder'=>'Password', 'name'=>'password');
                        $re_password_input_attributes = array('class'=>'form-control', 'placeholder'=>'Confirm Password', 'name'=>'re_password');
                        $music_genre_input_attributes = array('class'=>'form-select', 'name'=>'music_genre_id', 'options'=>$options);
                        $input_button_attributes = array('class'=>'btn btn-primary btn-lg', 'value'=>'Register', 'name'=>'submit');

                        echo form_open_multipart('users/register', $form_attributes);

                        ?>

                        <div class="row mt-md-3">
                            <div class="col">
                                <?php echo form_input($fname_input_attributes); ?>
                            </div>
                            <div class="col">
                                <?php echo form_input($lname_input_attributes); ?>
                            </div>
                        </div>

                        <div class="row mt-md-3">
                            <div class="col">
                                <?php echo form_input($username_input_attributes); ?>
                            </div>
                            <div class="col">
                                <?php echo form_dropdown($music_genre_input_attributes); ?>
                            </div>
                        </div>

                        <div class="row mt-md-3">
                            <div class="col">
                                <?php echo form_input($email_input_attributes); ?>
                            </div>
                        </div>

                        <div class="row mt-md-3">
                            <div class="col">
                                <?php echo form_upload($file_input_attributes); ?>
                            </div>
                        </div>

                        <div class="row mt-md-3">
                            <div class="col">
                                <?php echo form_password($password_input_attributes); ?>
                            </div>
                            <div class="col">
                                <?php echo form_password($re_password_input_attributes); ?>
                            </div>
                        </div>


                        <div class="row mt-md-4">
                            <div class="col-sm-4">
                                <?php echo form_submit($input_button_attributes); ?>
                            </div>
                            <div class="col-sm-8">
                                <a href="login" class="link-primary">Have An Account</a>
                            </div>
                        </div>

                        

                    </div>
                </div>
            </div>
        </div> 
        <?php echo form_close(); ?>
    </div>
</div>
