<div class="container mt-md-5">
    <div class="row">
        <div class="col-md-6 mx-auto">
            <?php foreach($search_results as $user): ?>
                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-md-2">
                            <img alt="Image placeholder" src="<?php echo $user->avatar ?>" class="rounded-circle mt-1 ms-1" width="80">
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                                <h5 class="card-title"><a href="#" class="link-dark"><?php echo $user->first_name . " " .  $user->last_name?></a></h5>
                                <p class="card-text"><small class="text-muted"><?php echo  element($user->music_genre, $this->config->item('music_genres')); ?></small></p> 
                            </div>
                        </div>
                        <div class="col-md-2">
                            <a href="#" class="btn btn-primary mt-4">Follow</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>