<?php if(Session::get_flash('success')): ?>

<div class="alert alert-success"><?php echo Session::get_flash('success'); ?></div>

<?php endif; ?>
<?php if(Session::get_flash('error')): ?>

<div class="alert alert-danger"><?php echo Session::get_flash('error'); ?></div>

<?php endif; ?>


<?php foreach ($projects as $project): ?>
<div class="blog-post">
            <h2 class="blog-post-title"><?php echo $project->category; ?></h2>
            <p class="blog-post-meta"><?php echo $project->title; ?></p>
            <?php if($project->status==1): ?>
                <?php echo "completed"; ?>
            <?php elseif($project->status==0): ?>
                <?php echo "pending"; ?>
            <?php endif; ?>
            <br><br>

        
        
        <a class="btn btn-default" href="/projects/edit/<?php echo $project->id; ?>">Edit</a>
        <a class="btn btn-danger" href="/projects/delete/<?php echo $project->id; ?>">Delete</a>

           
            </div><!-- /.blog-post -->
<?php endforeach; ?>


