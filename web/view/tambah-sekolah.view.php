	<div style="margin-top:150px;">
		<h1><center>Tambah Sekolah</center></h1>
		<?php echo isset($msg['register']) ? $msg['register'] : '';?>
		<form method="post" enctype="multipart/form-data">
			<div class="col-md-8 col-md-offset-2">
			  <fieldset class="form-group">
				<label for="nama-sekolah">Nama sekolah</label>
				<input type="text" class="form-control" id="nama-sekolah" name="nama-sekolah" placeholder="Nama sekolah...">
				<small class="text-muted"><?php echo isset($error['nama-sekolah']) ? $error['nama-sekolah'] : '';?></small>
			  </fieldset>
			  <fieldset class="form-group">
				<label for="Npsn">Npsn</label>
				<input type="Npsn" class="form-control" id="Npsn" name="Npsn" placeholder="Npsn...">
				<small class="text-muted"><?php echo isset($error['Npsn']) ? $error['Npsn'] : '';?></small>
			  </fieldset>
			  <fieldset class="form-group">
				<label for="alamat">Alamat</label>
				<input type="alamat" class="form-control" id="alamat" name="alamat" placeholder="Alamat...">
				<small class="text-muted"><?php echo isset($error['alamat']) ? $error['alamat'] : '';?></small>
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
				<label for="foto">Foto</label><br />
				<img id="image" src="img/qweasdadead.jpg"  width="200px" height="200px" /><br />
				<div class="buttoninput">
					<input onchange="readURL(this);" type="file" name="foto" id="foto" accept="image/*">
				</div>
				<small class="text-muted"><?php echo isset($error['foto']) ? $error['foto'] : '';?></small>
			  </fieldset>
			</div>
				<div class="clearfix"></div>
				<button type="submit" class="btn btn-primary" name="register">Register</button>
		</form>
	
	<script type="text/javascript" src="view/js/fungsi.js"></script>