<h2><?=  $title; ?></h2>

<?php echo validation_errors();  ?>
<?php echo form_open('posts/update'); ?>
<input type="hidden" name="id" value="<?php echo $post['id']; ?>">
  <div class="form-group">
    <label for="">Title</label>
    <input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
  </div>
  <label for="">Category</label>
  <select class="form-control" name="category_id">

    <?php foreach($categories as $category): ?>
    <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
  <?php endforeach; ?>
  </select>
  <div class="form-group">
    <label for="">Body</label>
    <textarea name="body" class="form-control">
      <?php echo $post['body']; ?>
    </textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
