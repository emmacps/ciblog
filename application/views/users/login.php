<?php echo form_open('users/login');  ?>

<div class="col-md-4 col-md-offset-6">
	<h1><?php echo $title; ?></h1>
	<div class="form-group">
		<input type="text" name="username" class="form-control" required autofocus>
	</div>
	<div class="form-group">
		<input type="password" name="password" class="form-control"  required autofocus>
	</div>
	<button type="submit" class="btn btn-primary">Login</button>
</div>

<?php echo form_close(); ?>