<h2>
    <?php echo $post['title'];?>
</h2>
<small class='post-date'>Posted on:
    <?php echo $post['created_at']; ?> </small><br>
<img src="<?= site_url();?>assets/images/posts/<?=$post['post_image'];?>">
<div class="post-body">
    <?php echo $post['body'];  ?>
</div>

    <?php if($this->session->userdata('user_id') == $post['user_id']): ?>
<hr>
<?= form_open('/posts/delete/'.$post['ID']); ?>
<input type="submit" value="Delete" class='btn btn-danger'>
<a class="btn btn-default pull-left" href="<?= base_url();?>posts/edit/<?= $post['slug'];?>">Edit</a>
</form>
    <?php endif; ?>
<hr>
<h3>Comments</h3>

<?php if($comments) : ?>
<?php foreach($comments as $comment) : ?>
<div class='card'>
    <h5>
        <?= $comment['body'] ;?> [by <strong>
            <?= $comment['name']; ?></strong>]</h5>
</div>
<br>
<?php endforeach ?>
<?php else : ?>
<p>No Comments to Display</p>
<?php endif ?>
<hr>
<h3>Add Comment</h3>
<?= validation_errors(); ?>
<?= form_open('comments/create/'.$post['ID']);?>
<div class='form-group'>
    <label>Name</label>
    <input type="text" name='name' class='form-control'>
</div>
<div class='form-group'>
    <label>Email</label>
    <input type="email" name='email' class='form-control'>
</div>
<div class='form-group'>
    <label>Body</label>
    <textarea name='body' class='form-control'></textarea>
</div>
<input type='hidden' name='slug' value="<?= $post['slug'];?>">
<button class='btn btn-primary' type='submit'>Submit</button>
</form>