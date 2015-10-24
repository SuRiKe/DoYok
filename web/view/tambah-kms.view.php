<div style="margin-top:150px;margin-bottom:150px;">
	<div class="container">
		<h1><center>Tambah Keluarga Miskin</center></h1>
		<hr>
		<?php echo isset($msg['tambah_kms']) ? $msg['tambah_kms'] : '';?>
		<form method="post" enctype="multipart/form-data">
			<div class="col-md-5 col-md-offset-1">
			  <fieldset class="form-group">
				<label for="nama">Nama</label>
				<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama" autofocus required>
				<small class="text-muted"><?php echo isset($error['nama']) ? $error['nama'] : '';?></small>
			  </fieldset>
			  <fieldset class="form-group">
				<label for="jumlah_anggota_keluarga">Jumlah Anggota Keluarga</label>
				<input type="number" class="form-control" id="jumlah_anggota_keluarga" name="jumlah_anggota_keluarga" max-length="1" placeholder="Jumlah Anggota Keluarga" required>
				<small class="text-muted"><?php echo isset($error['jumlah_anggota_keluarga']) ? $error['jumlah_anggota_keluarga'] : '';?></small>
			  </fieldset>
			  <fieldset class="form-group">
				<label for="foto">Foto</label><br />
				<div class="buttoninput">
				<img id="image" src="img/anon.gif"  width="200px" height="200px" /><br />
					<input onchange="readURL(this);" type="file" name="foto" id="foto" accept="image/*">
				</div>
				<small class="text-muted"><?php echo isset($error['foto']) ? $error['foto'] : '';?></small>
			  </fieldset>
			  <fieldset class="form-group">
				<label for="No KK">No KK</label>
				<input type="text" class="form-control" id="no_kk" name="no_kk" placeholder="No KK" required>
				<small class="text-muted"><?php echo isset($error['no_kk']) ? $error['no_kk'] : '';?></small>
			  </fieldset>
			  <fieldset class="form-group">
				<label for="daerah">Daerah</label>
				<select class="form-control" id="daerah" name="id_daerah">
						<option value="none">-- Daerah --</option>
					<?php foreach($daerah as $data):?>
						<option value="<?=$data['id_daerah']?>"><?=$data['daerah'];?></option>
					<?php endforeach;?>
				</select>
				<small class="text-muted"><?php echo isset($error['id_daerah']) ? $error['id_daerah'] : '';?></small>
			  </fieldset>
			</div>
			<div class="col-md-5">
			  <fieldset class="form-group">
				<label for="alamat">Alamat</label>
				<input type="text" class="form-control" id="alamat" name="alamat">
				<small class="text-muted"><?php echo isset($error['alamat']) ? $error['alamat'] : '';?></small>
			  </fieldset>
			  <fieldset class="form-group">
				<label for="luas_tanah">Luas Tanah</label>
				<input type="text" class="form-control" id="luas_tanah" name="luas_tanah">
				<small class="text-muted"><?php echo isset($error['luas_tanah']) ? $error['luas_tanah'] : '';?></small>
			  </fieldset>
			  <fieldset class="form-group">
				<label for="diskripsi">Diskripsi</label>
				<textarea class="form-control" id="diskripsi" name="diskripsi" rows="18"></textarea>
				<small class="text-muted"><?php echo isset($error['diskripsi']) ? $error['diskripsi'] : '';?></small>
			  </fieldset>
			</div>
			<div class="clearfix"></div>
			<center><button type="submit" class="btn btn-primary" name="tambah_kms">Tambah</button></center>
		</form>
	</div>
</div>
<script type="text/javascript" src="view/js/fungsi.js"></script>