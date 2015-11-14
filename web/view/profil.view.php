<style>
	body{background-color: #5E7FA5;}
</style>
<div class="container" style="padding:90px 0;">
	<div class="col-md-4">
		<ul class="col-md-11 profile">
			<center><img src="img/anon.png" alt="foto profil"></center>
			<a href="#"><li>Edit Profile</li></a>
			<a href="#"><li>Lorem</li></a>
			<a href="#"><li>Ipsum</li></a>
			<a href="#"><li>Shit</li></a>
			<a href="#"><li>Dholor</li></a>
		</ul>
	</div>
	<div class="col-md-8 edit-profile">
		<form action="" method="post" enctype="multipart/form-data">
			<legend>Profil Anda</legend>
				<div class="col-md-6">
					<div class="form-group">
						<label for="foto">Foto Profil</label><br />
						<div>
						<center><img id="image" src="img/anon.png"  width="150px" height="150px" /></center><br />
							<input onchange="readURL(this);" type="file" name="foto" id="foto" accept="image/*">
						</div>
						<small class="text-muted"><?php echo isset($error['foto']) ? $error['foto'] : '';?></small>
					</div>
					<div class="form-group">
						<label for="provinsi">Provinsi</label>
						<select name="provinsi" id="provinsi" class="form-control">
							<option value="">-- Pilih Provinsi --</option>
							<option value="">Bali</option>
							<option value="">Jawa Barat</option>
							<option value="">Papua Barat</option>
						</select>
					</div>
					<div class="form-group">
						<label for="kota">Kota</label>
						<input type="text" class="form-control" name="kota" placeholder="Kota">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5" placeholder="Alamat"></textarea>
					 </div>
				</div>
				<div class="col-md-6">
					<div class="form-group">
						<label for="nama">Nama Lengkap</label>
						<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" autofocus>
					</div>
					<div class="form-group">
						<label for="email">Emai</label>
						<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="user">Username</label>
						<input type="text" class="form-control" name="user" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="telp">No Telpon</label>
						<input type="number" class="form-control" name="telp" placeholder="No Telpon">
					</div>
				</div>
				<div class="clearfix"></div>
				<fieldset><legend>Ganti Password</legend>
					<div class="form-group">
						<label for="pass">Password</label>
						<input type="password" onkeyup="passwordClick();" class="form-control password" name="pass" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="k-password">Tulis Ulang Password</label>
						<input type="password" class="form-control" name="k-pass" placeholder="Konfirmasi Password">
					</div>
				</fieldset>
				<div class="clearfix"></div>
				<div class="form-group">
					<center style="padding:10px;">
						<button type="submit" class="btn btn-primary" name="simpan" style="margin-right:10px;">Simpan</button>
						<button type="reset" class="btn btn-primary" name="batal">Batal</button>
					</center>
				</div>
		</form>
	</div>
</div>