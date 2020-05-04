<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>
<?php echo form_open('categories/create'); ?>
<div class="form-group">
  <label for="">Name</label>
  <input type="text" name="name" class="form-control">
  <button type="submit" class="btn btn-primary">Submit</button>
</div>
</form>
