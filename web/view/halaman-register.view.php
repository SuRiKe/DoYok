<div style="margin-top:150px;margin-bottom:100px;">
	<div class="container">
		<h3><center>Belajarlah jadi bijaksana!</center></h3>
		<hr>
		<?php echo isset($msg['daftar']) ? $msg['daftar'] : '';?>
		<form method="post">
			<div class="col-md-6 col-md-offset-3">
				<div class="card">
					<div class="card-block">
						<fieldset class="form-group">
							<input type="email" class="form-control" name="email" placeholder="Email Anda" required autofocus>
							<small class="text-muted"><?php echo isset($error['email']) ? $error['email'] : '';?></small>
						</fieldset>
						<fieldset class="form-group">
							<input type="password" class="form-control" name="password" placeholder="Password Anda" required>
							<small class="text-muted"><?php echo isset($error['password']) ? $error['password'] : '';?></small>
						</fieldset>
						<fieldset class="form-group">
							<input type="konfirm-password" class="form-control" name="konfirm-password" placeholder="Masukkan Password Sekali Lagi" required>
							<small class="text-muted"><?php echo isset($error['konfirm-password']) ? $error['konfirm-password'] : '';?></small>
						</fieldset>
						<center><button type="submit" class="btn btn-primary" name="daftar">Daftar</button></center>
					</div>
				</div>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript" src="view/js/fungsi.js"></script>