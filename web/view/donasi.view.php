<div class="col-md-4 col-md-offset-4 login-form">
	<h1><center>Donasi Anda</center></h1>
	<hr>
	<?php echo isset($msg['donasi']) ? $msg['donasi'] : '';?>
	<form method="post">
	  <fieldset class="form-group">
		<label for="jumlah">Jumlah</label>
		RP<input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Donasi" required autofocus>
		<small class="text-muted"><?php echo isset($error['jumlah']) ? $error['username'] : '';?></small>
	  </fieldset>
	  <button type="submit" class="btn btn-primary" name="donasi">donasi</button>
	</form>
</div>