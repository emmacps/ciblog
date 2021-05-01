<h2><?php echo $post['title']; ?></h2>

<div class="post-body">
  <img class="post-thump" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
  <small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
  <b><?php // echo $post['name']; ?></b>
  <?php echo $post['body']; ?>
</div>

<?php if($this->session->userdata('user_id') == $post['user_id']): ?>
<hr>
<a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'] ?>" class="btn btn-danger">Edit</a>

<?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" name="" value="Delete" name="btn btn-danger">
</form>
 <?php endif; ?>

<hr>
<h3>Comments</h3>
<?php if($comments) :  ?>

<?php foreach($comments as $comment) : ?>
	<div class="well">
<h5><?php echo $comment['body']; ?>[by <b><?php echo $comment['name'] ?></b>]</h5>
</div>

<?php endforeach; ?>

	<?php else: ?>
<p>No Comments to display</p>
<?php endif; ?>

<hr>

<h3>Add Comment</h3>
<?php echo validation_errors(); ?>
<?php echo form_open('comments/create/'.$post['id']); ?>
	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="text" name="email" class="form-control">
	</div>
	<div class="form-group">
		<label>Body</label>
		<textarea type="text" name="body" class="form-control">
			
		</textarea>
	</div>
	<input type="hidden" name="slug" value="<?php echo $post['slug']; ?>">
	<button class="btn btn-primary" type="submit">Submit</button>
</form>
