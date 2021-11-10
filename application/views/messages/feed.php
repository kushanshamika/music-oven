<?php 

$timeAgo = new Westsworld\TimeAgo();
foreach($messages as $message): 

?>


<div class="card mb-3 border-white me-3">
    <div class="card-body">
        <div class="row mb-1">
            <div class="col-md-1">
                <img alt="Avatar" src="https://ik.imagekit.io/musicoven/tr:w-100,h-100/<?php echo $message['avatar']; ?>" class="rounded-circle" width="50">
            </div>
            <div class="col-md-10">
                <h5 class="card-title"><a class="link-dark" href="<?php echo base_url(); ?>index.php/users/profile/<?php echo $message['username']; ?>"><?php echo $message['first_name'] . " " . $message['last_name']; ?></a></h5>
                <p class="card-text"><small class="text-muted"><?php echo $timeAgo->inWordsFromStrings($message['date']); ?></small></p>
            </div>
        </div>
    
        <p class="card-text"><?php echo $message['body']; ?></p>
    </div>
    <?php if ($message['image']): ?>
        <img src="<?php echo $message['image'] ?>" class="card-img-bottom" alt="...">
    <?php endif ?>
</div>

<?php endforeach; ?>