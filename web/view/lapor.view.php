<div style="margin-top:150px;margin-bottom:150px;">
	<div class="container">
		<h1><center>Tambah Keluarga Miskin</center></h1>
		<hr>
		<?php echo isset($msg['tambah_kms']) ? $msg['tambah_kms'] : '';?>
		<form action="?hal=lapor1" method="post" enctype="multipart/form-data">
			<div class="col-md-5 col-md-offset-1 col-sm-6">
			  	<div class="input-group">
					<label for="nama">Nama Lengkap</label>
					<input type="text" class="form-control" id="nama" name="nama" required autofocus>
					<small> - Pastikan untuk memasukkan nama lengkap</small>
				</div>
				<div class="input-group">
					<label for="jumlah_anggota_keluarga">Jumlah Anggota Keluarga</label>
					<input type="number" class="form-control" id="jumlah_anggota_keluarga" name="jumlah_anggota_keluarga" required>
					<small> - Total jumlah anggota keluarga anda</small>
				</div>
				<div class="input-group">
					<label for="provinsi">Provinsi</label>
					<select name="provinsi" id="provinsi" class="form-control" required>
						<option value="bali">Bali</option>
						<option value="jakarta">Jawa Timur</option>
						<option value="bandung">Jawa Barat</option>
					</select>
					<small> - Provinsi yang valid akan memudahkan dalam penyaluran bantuan</small>
				</div>
				<div class="input-group">
					<label for="provinsi">Kota</label>
					<select name="provinsi" id="provinsi" class="form-control" required>
						<option value="denpasar">Denpasar</option>
						<option value="bogor">Bogor</option>
						<option value="bandung">Bandung</option>
					</select>
					<small> - Kota menunjukkan data alamat penyaluran lebih spesifik</small>
				</div>
				<div class="input-group">
					<label for="alamat">Alamat</label>
					<textarea class="form-control" id="alamat" name="alamat" required></textarea>
					<small> - Masukkan alamat rumah dengan lengkap</small>
				</div>
				<div class="input-group">
					<label for="kades">Kepala Desa</label>
					<input type="text" class="form-control" id="nama_kades" name="nama_kades" placeholder="Nama Kades" required>
					<input type="number" class="form-control" id="no_hp_kades" name="no_hp_kades" placeholder="No HP Kades" required>
					<small> - Masukkan nama dan nomer HP Kades dengan valid</small>
				</div>
				<div class="input-group">
					<label for="rt">Kepala RT</label>
					<input type="text" class="form-control" id="nama_rt" name="nama_rt" placeholder="Nama Kepala RT" required>
					<input type="number" class="form-control" id="no_hp_rt" name="no_hp_rt" placeholder="No HP Kepala RT" required>
					<small> - Masukkan nama dan nomer HP Kades dengan valid</small>
				</div>
			</div>
			<div class="col-md-5 col-sm-6">
				<div class="input-group">
					<label for="no_kk">No. KK</label>
					<input type="number" class="form-control" id="no_kk" name="no_kk" required>
					<small> - Masukkan nomer KK sesuai identitas Kartu Keluarga</small>
				</div>
				<div class="input-group">
					<label for="foto">Foto Rumah</label>
					<center>
					<img id="image" src="img/rumah.png" width="200px" /><br />
						<input onchange="readURL(this);" type="file" name="foto" id="foto" accept="image/*">
					</center>
					<small class="text-muted"><?php echo isset($error['foto']) ? $error['foto'] : '';?></small>
				</div>
				<div class="row">
					<div class="col-md-6">
					<label for="panjang_tanah">Luas Tanah</label>
						<br>
						<div class="input-group">
							<input type="number" placeholder="Panjang Tanah" min="1" id="panjang_tanah" onkeyup="luasTanah();" class="form-control" name="panjang_tanah" required>
							<span class="input-group-addon">Are</span>
						</div>
					</div>
					<div class="col-md-6">
						<br>
						<div class="input-group">
							<input type="number" placeholder="Lebar Tanah" min="1" id="lebar_tanah" onkeyup="luasTanah();" class="form-control" name="lebar_tanah" required>
							<span class="input-group-addon">Are</span>
						</div>
						<br>
					</div>
				</div>
				<div class="input-group">
					<span class="input-group-addon">Luas Tanah : </span>
					<input type="number" class="form-control" id="luas_tanah" name="luas_tanah" required disabled>
					<span class="input-group-addon">Are</span>
				</div>
				<br>
				<div class="input-group">
					<label for="diskripsi">Deskripsi Singkat</label>
					<textarea name="diskripsi" id="diskripsi" cols="1" maxlength=200 rows="3" class="form-control" required></textarea>
					<small> - Tulislah deskripsi dengan singkat, padat dan menarik (maksimal 200 karakter)</small>
				</div>
				<br><br>
			</div>
			<center>
				<button type="submit" class="btn btn-primary" name="tambah_kms" style="padding:10px 25px 10px 25px; font-size:18px;">Lanjut <span class="glyphicon glyphicon-play"></span></button>
			</center>
		</form>
	</div>
</div>
<script type="text/javascript" src="view/js/fungsi.js"></script>