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
                            <img alt="Avatar" src="https://ik.imagekit.io/musicoven/tr:w-100,h-100/<?php echo $user->avatar; ?>" class="rounded-circle" width="40">
                            <a class="link-dark" href="<?php echo base_url(); ?>index.php/users/profile/<?php echo $user->username; ?>"><?php echo $user->first_name . " " . $user->last_name; ?></a>
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
                            <img alt="Avatar" src="https://ik.imagekit.io/musicoven/tr:w-100,h-100/<?php echo $user->avatar; ?>" class="rounded-circle" width="40">
                            <a class="link-dark" href="<?php echo base_url(); ?>index.php/users/profile/<?php echo $user->username; ?>"><?php echo $user->first_name . " " . $user->last_name; ?></a>
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