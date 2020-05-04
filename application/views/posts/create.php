<h2><?=  $title; ?></h2>

<?php echo validation_errors();  ?>
<?php echo form_open_multipart('posts/create'); ?>
  <div class="form-group">
    <label for="">Title</label>
    <input type="text" name="title" class="form-control">
  </div>
  <div class="form-group">
    <label for="">Category</label>
    <select class="form-control" name="category_id">
      <option value="">Select Option</option>
      <?php foreach($categories as $category): ?>
      <option value="<?php echo $category['id']; ?>"><?php echo $category['name']; ?></option>
    <?php endforeach; ?>
    </select>
  </div>
  <div class="form-group">
    <label for="">Uplaod Image</label>
    <input type="file" name="userfile" size="20">
  </div>
  <div class="form-group">
    <label for="">Body</label>
    <textarea name="body" class="form-control"></textarea>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
