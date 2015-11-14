<div class="container" style="padding:25px 0;">
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
		<form action="" >
			<fieldset class="form-group">
				<label for="foto">Foto Profil</label><br />
				<div>
				<img id="image" src="img/anon.png"  width="200px" height="200px" /><br />
					<input onchange="readURL(this);" type="file" name="foto" id="foto" accept="image/*">
				</div>
				<small class="text-muted"><?php echo isset($error['foto']) ? $error['foto'] : '';?></small>
			</fieldset>
			<fieldset class="form-group">
				<label for="uname">Nama Pengguna</label>
				<input type="text" class="form-control" name="uname" placeholder="Nama Pengguna">
			</fieldset>
			<fieldset class="form-group">
				<label for="nama">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
			</fieldset>
			<fieldset class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email">
			</fieldset>
			<fieldset class="form-group">
				<label for="telp">No Telepon</label>
				<input type="text" class="form-control" name="telp" placeholder="No Telepon">
			</fieldset>
			<fieldset class="form-group">
				<label for="alamat">Alamat</label>
				<textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5" placeholder="Alamat"></textarea>
			 </fieldset>
			<fieldset class="form-group">
				<label for="provinsi">Provinsi</label>
				<select name="provinsi" id="provinsi" class="form-control">
					<option value="">-- Pilih Provinsi --</option>
					<option value="">Bali</option>
					<option value="">Jawa Barat</option>
					<option value="">Papua Barat</option>
				</select>
			</fieldset>
			<fieldset class="form-group">
				<label for="kota">Kota</label>
				<input type="text" class="form-control" name="kota" placeholder="Kota">
			</fieldset>
			<fieldset class="form-group">
			<center style="padding:10px;">
				<button type="submit" class="btn btn-primary" name="simpan" style="margin-right:10px;">Simpan</button>
				<button type="reset" class="btn btn-primary" name="batal">Batal</button>
			</center>
			</fieldset>
		</form>
	</div>
</div>