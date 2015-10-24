<div style="margin-top:150px;margin-bottom:100px;">
	<div class="container">
	<h1><center>Regiter Akun</center></h1>
	<hr>
	<?php echo isset($msg['register']) ? $msg['register'] : '';?>
	<form method="post" enctype="multipart/form-data">
		<div class="col-md-5 col-md-offset-1">
		  <fieldset class="form-group">
			<label for="ktp">No KTP</label>
			<input type="number" class="form-control" id="ktp" name="no_ktp" placeholder="Nomor KTP anda..." required autofocus>
			<small class="text-muted"><?php echo isset($error['no_ktp']) ? $error['no_ktp'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="nama">Nama</label>
			<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama anda..." required>
			<small class="text-muted"><?php echo isset($error['nama']) ? $error['nama'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="username">Username</label>
			<input type="username" class="form-control" id="username" name="username" placeholder="Username..." required>
			<small class="text-muted"><?php echo isset($error['username']) ? $error['username'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Password..." required>
			<small class="text-muted"><?php echo isset($error['password']) ? $error['password'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="no_hp">No. HP</label>
			<input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="No. HP anda..." required>
			<small class="text-muted"><?php echo isset($error['no_hp']) ? $error['no_hp'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="email">E-mail</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Email anda..." required>
			<small class="text-muted"><?php echo isset($error['email']) ? $error['email'] : '';?></small>
		  </fieldset>
		</div>
		<div class="col-md-5">
		  <fieldset class="form-group">
			<label for="tingkat">Sebagai</label>
			<select class="form-control" id="tingkat" name="tingkat">
					<option value="none">-- Sebagai --</option>
					<option value="donatur">Donatur</option>
					<option value="pelapor">Pelapor</option>
			</select>
			<small class="text-muted"><?php echo isset($error['tingkat']) ? $error['tingkat'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
		  <label for="jenis_kelamin">Jenis Kelamin</label>
		  	<div class="radio">
			  <label>
			    <input type="radio" name="jenis_kelamin" value="laki-laki" checked>
			    Laki-laki
			  </label>
			</div>
			<div class="radio">
			  <label>
			    <input type="radio" name="jenis_kelamin" value="perempuan">
			    Perempuan
			  </label>
			</div>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="foto">Foto</label><br />
			<div class="buttoninput">
				<img id="image" src="img/anon.gif" width="200px" height="200px" /><br />
				<input onchange="readURL(this);" type="file" name="foto" id="foto" accept="image/*">
			</div>
			<small class="text-muted"><?php echo isset($error['foto']) ? $error['foto'] : '';?></small>
		  </fieldset>
		</div>
		<div class="clearfix"></div>
		<center><button type="submit" class="btn btn-primary" name="register">Register</button></center>
		</form>
	</div>
</div>
<script type="text/javascript" src="view/js/fungsi.js"></script>