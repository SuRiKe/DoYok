<div class="daftar-login-background">
	<div class="container">
		<form method="post">
			<div class="col-sm-12 col-xs-12 col-md-6 col-md-offset-3">
				<div class="daftar-login">
					<h3><center>Dimulai Dengan Kesederhanaan!</center></h3>
					<?php echo isset($error['emailada']) ? $error['emailada'] : '';?>
					<?php echo isset($msg['daftar-login']) ? $msg['daftar-login'] : '';?>
					<fieldset class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Email Anda" required autofocus>
						<small class="text-muted"><?php echo isset($error['email']) ? $error['email'] : '';?></small>
					</fieldset>
					<fieldset class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password Anda" required>
						<small class="text-muted"><?php echo isset($error['password']) ? $error['password'] : '';?></small>
					</fieldset>
					<!-- <fieldset class="form-group">
						<input type="konfirm-password" class="form-control" name="konfirm-password" placeholder="Masukkan Password Sekali Lagi" required>
						<small class="text-muted"><?php echo isset($error['konfirm-password']) ? $error['konfirm-password'] : '';?></small>
					</fieldset> -->
					<button type="submit" class="btn btn-primary form-control" name="daftar-login">DAFTAR</button>
					<div class="col-md-5 col-sm-5 garis-header"></div>
					<div class="col-md-2 col-sm-2 kata-header"><p><span>ATAU</span></p></div>
					<div class="col-md-5 col-sm-5 garis-header"></div>
					<a href="facebook.com" class="form-control btn btn-facebook"><i class="fa fa-facebook"></i> Masuk dengan Facebook</a>
					<a href="google.com" class="form-control btn btn-google"><i class="fa fa-google-plus"></i> Masuk dengan Google</a>
				</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript" src="view/js/fungsi.js"></script>