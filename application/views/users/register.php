<h2><?= $title; ?></h2>

<?php echo validation_errors(); ?>

<?php echo form_open('users/register'); ?>

	<div class="form-group">
		<label>Name</label>
		<input type="text" name="name" class="form-control" placeholder="Name">
	</div>
	<div class="form-group">
		<label>Zipcode</label>
		<input type="text" name="zipcode" class="form-control" placeholder="Name">
	</div>
	<div class="form-group">
		<label>Email</label>
		<input type="email" name="email" class="form-control" placeholder="Name">
	</div>
	<div class="form-group">
		<label>Username</label>
		<input type="text" name="username" class="form-control">
	</div>
	<div class="form-group">
		<label>Password</label>
		<input type="password" name="password" class="form-control" placeholder="Name">
	</div>
	<div class="form-group">
		<label>Conform password</label>
		<input type="password" name="password2" class="form-control" placeholder="Name">
	</div>
	<button type="submit" class="btn btn-primary">Register</button>

<?php echo form_close(); ?>