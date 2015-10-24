<div class="col-md-4 col-md-offset-4 login-form">
	<h1><center>Halaman Login</center></h1>
	<hr>
	<?php echo isset($msg['login']) ? $msg['login'] : '';?>
	<form method="post">
	  <fieldset class="form-group">
		<label for="username">Username</label>
		<input type="username" class="form-control" id="username" name="username" placeholder="Username" required autofocus>
		<small class="text-muted"><?php echo isset($error['username']) ? $error['username'] : '';?></small>
	  </fieldset>
	  <fieldset class="form-group">
		<label for="password">Password</label>
		<input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
		<small class="text-muted"><?php echo isset($error['password']) ? $error['password'] : '';?></small>
	  </fieldset>
	  <button type="submit" class="btn btn-primary" name="login">Login</button>
	</form>
</div>