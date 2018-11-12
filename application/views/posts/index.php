<h2>
	<?= $title ?>
</h2>
<?php foreach($posts as $post) :?>

<h3>
	<?= $post['title']?>
</h3>
<div class='row'>
	<div class='col-md-3'>
		<img class = 'post-thumb thumbnail' src="<?= site_url();?>assets/images/posts/<?=$post['post_image'];?>">
	</div>
	<div class='col-md-9'>
		<small class='post-date'>Posted on:
			<?= $post['created_at'] ?? ''; ?><br>
			in <strong><?= $post['name'];?></strong> </small><br>
		<?= word_limiter($post['body'],50)?>
		<br><br>
		<p><a class="btn btn-secondary" href="<?= site_url('/posts/'.$post['slug']);?>">Read More</a></p>
	</div>
</div>


<?php endforeach ?>
<div class="pagination-links">
<?=  $this->pagination->create_links(); ?>
</div>