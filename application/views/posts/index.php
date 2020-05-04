<h2><?= $title ?></h2>

<?php foreach ($posts as $post) : ?>

  <h3><?php echo $post['title']; ?></h3>
  <div class="row">
    <div class="col-md-3">
      <img class="post-thump" src="<?php echo site_url(); ?>assets/images/posts/<?php echo $post['post_image']; ?>" alt="">
    </div>
    <div class="col-md-9">
      <small class="post-date">Posted on: <?php echo $post['created_at']; ?></small>
      <b><?php echo $post['name']; ?></b>
      <p><?php echo word_limiter($post['body'], 50); ?></p>
      <p><a class="btn btn-primary" href="<?php echo site_url('/posts/'.$post['slug']); ?>">Read More</a></p>
    </div>
  </div>


<?php endforeach; ?>
