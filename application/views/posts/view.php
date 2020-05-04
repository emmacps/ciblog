<h2><?php echo $post['title']; ?></h2>

<div class="post-body">
  <img class="post-thump" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
  <small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
  <b><?php // echo $post['name']; ?></b>
  <?php echo $post['body']; ?>
</div>

<hr>

<?php echo form_open('/posts/delete/'.$post['id']); ?>
<input type="submit" name="" value="Delete" name="btn btn-danger">
</form>

<a href="<?php echo base_url(); ?>posts/edit/<?php echo $post['slug'] ?>" class="btn btn-danger">Edit</a>
