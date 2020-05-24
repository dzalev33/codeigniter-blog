<h2><?php echo $post['title']; ?></h2>
<small class="post-date">Posted on: <?php echo $post['created_at']; ?></small><br>
<img class="" src="<?php echo site_url();?>images/posts/<?php echo $post['post_image']; ?>">
<div class="post-body">
	<?php echo $post['body']; ?>
</div>

<hr>

<a class="btn  btn-dark float-left mr-3" href="edit/<?php echo $post['slug'] ?>">Edit</a>

<?php echo form_open('/posts/delete/'.$post['id']); ?>

<input type="submit" value="Delete" class="btn badge-danger">
</form>

