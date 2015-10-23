	<div style="margin-top:175px;margin-bottom:175px;">
	<div class="col-md-8 col-md-offset-2">
		<h1>Tambah Keluarga Miskin</h1>
		<?php echo isset($msg['tambah_kms']) ? $msg['tambah_kms'] : '';?>
		<form method="post" enctype="multipart/form-data">
		  <fieldset class="form-group">
			<label for="kepala_keluarga">Kepala Keluarga</label>
			<input type="text" class="form-control" id="kepala_keluarga" name="kepala_keluarga" placeholder="Nama Kepala Keluarga">
			<small class="text-muted"><?php echo isset($error['kepala_keluarga']) ? $error['kepala_keluarga'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="jumlah_anggota_keluarga">Jumlah Anggota Keluarga</label>
			<input type="number" class="form-control" id="jumlah_anggota_keluarga" name="jumlah_anggota_keluarga" max-length="1" placeholder="Jumlah Anggota Keluarga">
			<small class="text-muted"><?php echo isset($error['jumlah_anggota_keluarga']) ? $error['jumlah_anggota_keluarga'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="foto">Foto</label><br />
			<img id="image" src="img/qweasdadead.jpg"  width="350px" height="350px" /><br />
			<div class="buttoninput">
				<input onchange="readURL(this);" type="file" name="foto" id="foto" accept="image/*">
			</div>
			<small class="text-muted"><?php echo isset($error['foto']) ? $error['foto'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="No KK">No KK</label>
			<input type="no_kk" class="form-control" id="no_kk" name="no_kk" placeholder="No KK">
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
		  <fieldset class="form-group">
			<label for="pekerjaan">Pekerjaan</label>
			<select class="form-control" id="pekerjaan" name="id_pekerjaan">
					<option value="none">-- Pekerjaan --</option>
				<?php foreach($pekerjaan as $data):?>
					<option value="<?=$data['id_pekerjaan']?>"><?=$data['pekerjaan'];?></option>
				<?php endforeach;?>
			</select>
			<small class="text-muted"><?php echo isset($error['id_pekerjaan']) ? $error['id_pekerjaan'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="alamat">Alamat</label>
			<textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
			<small class="text-muted"><?php echo isset($error['alamat']) ? $error['alamat'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="kebutuhan">Kebutuhan</label>
			<select class="form-control" id="kebutuhan" name="id_kebutuhan">
					<option value="none">-- Kebutuhan --</option>
				<?php foreach($kebutuhan as $data):?>
					<option value="<?=$data['id_kebutuhan']?>"><?=$data['kebutuhan'];?></option>
				<?php endforeach;?>
			</select>
			<small class="text-muted"><?php echo isset($error['id_kebutuhan']) ? $error['id_kebutuhan'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="diskripsi">Diskripsi</label>
			<textarea class="form-control" id="diskripsi" name="diskripsi" rows="15"></textarea>
			<small class="text-muted"><?php echo isset($error['diskripsi']) ? $error['diskripsi'] : '';?></small>
		  </fieldset>
		  <button type="submit" class="btn btn-primary" name="tambah_kms">Tambah</button>
		</form>
	</div>
	</div>
	<script type="text/javascript" src="view/js/fungsi.js"></script>