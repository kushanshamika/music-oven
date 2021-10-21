<div class="row">
    <div class="col-md-7">
        <div class="container d-flex h-100">
            <div class="row align-self-center w-100">
                <div class="mx-auto">
                    <div class="jumbotron">
                        <img src="<?php echo base_url(); ?>assets/images/login-bg.png" class="img-fluid mt-md-5" alt="Responsive image">
                    </div>
                </div>
            </div>
        </div> 
    </div>
    <div class="col-md-5">
        <div class="container d-flex h-100">
            <div class="row align-self-center w-100">
                <div class="mx-auto">
                    <div class="jumbotron">
                    <img src="<?php echo base_url(); ?>assets/images/logo.png" class="img-fluid mt-md-5" alt="Responsive image">

                        <?php

                        echo validation_errors("<p class='text-danger'>");


                        if ($this->session->flashdata('user_registered')) {
                            echo "<p class='text-success'>".$this->session->flashdata('user_registered');
                        }

                        $form_attributes = array('id'=>'login_form', 'class'=>'mt-md-5');
                        $username_input_attributes = array('class'=>'form-control', 'placeholder'=>'Username', 'name'=>'username');
                        $password_input_attributes = array('class'=>'form-control', 'placeholder'=>'Password', 'name'=>'password');
                        $input_button_attributes = array('class'=>'btn btn-primary btn-lg', 'value'=>'Login', 'name'=>'submit');

                        echo form_open('users/login', $form_attributes);

                        ?>

                        <div class="form-group mt-md-3">
                            <?php echo form_input($username_input_attributes); ?>
                        </div>

                        <div class="form-group mt-md-3">
                            <?php echo form_password($password_input_attributes); ?>
                        </div>

                        <div class="row mt-md-4">
                            <div class="col-sm-4">
                                <?php echo form_submit($input_button_attributes); ?>
                            </div>
                            <div class="col-sm-8">
                                <a href="register" class="link-primary">Create New Account</a>
                            </div>
                        </div>

                        

                    </div>
                </div>
            </div>
        </div> 
        <?php echo form_close(); ?>
    </div>
</div>
