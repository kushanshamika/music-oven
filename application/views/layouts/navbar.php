<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="<?php echo base_url(); ?>">
        <img src="<?php echo base_url(); ?>assets/images/logo.png" alt="" width="200" >
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
      </ul>
      <?php

        $options = $this->config->item('music_genres');

        $form_attributes = array('id'=>'search_form', 'class'=>'d-flex');
        $music_genre_input_attributes = array('class'=>'form-select me-2', 'name'=>'music_genre', 'options'=>$options);
        $input_button_attributes = array('class'=>'btn btn-outline-light', 'value'=>'Search', 'name'=>'submit');

        echo form_open('users/search', $form_attributes);

        echo form_dropdown($music_genre_input_attributes);

        echo form_submit($input_button_attributes);

        echo form_close();
      ?>
    </div>
  </div>
</nav>