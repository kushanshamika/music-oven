<?php foreach($messages as $message): ?>

<div class="card mb-3 border-white me-3">
    <div class="card-body">
        <div class="row mb-1">
            <div class="col-md-1">
                <img alt="Image placeholder" src="https://myoctocat.com/assets/images/octocats/octocat-16.png" class="rounded-circle" width="50">
            </div>
            <div class="col-md-10">
                <h5 class="card-title">Ruchini Thathsarani</h5>
                <p class="card-text"><small class="text-muted">3 mins ago</small></p>
            </div>
        </div>
    
        <p class="card-text"><?php echo $message->body; ?></p>
    </div>
    <?php if ($message->image): ?>
        <img src="<?php echo $message->image; ?>" class="card-img-bottom" alt="...">
    <?php endif ?>
</div>

<?php endforeach; ?>