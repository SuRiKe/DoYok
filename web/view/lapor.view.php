<div style="margin-top:150px;margin-bottom:150px;">
	<div class="container">
		<h1><center>Tambah Keluarga Miskin</center></h1>
		<hr>
		<?php echo isset($msg['tambah_kms']) ? $msg['tambah_kms'] : '';?>
		<form action="?hal=lapor1" method="post" enctype="multipart/form-data">
			<div class="col-md-10 col-md-offset-1 col-sm-12">
			  	<div class="input-group">
					<label for="nama">nama</label>
					<input type="text" class="form-control" id="nama" name="nama" required autofocus>
					<small> - Pastikan untuk memasukkan nama lengkap</small>
				</div>
				<div class="input-group">
					<label for="jumlah_anggota_keluarga">jumlah_anggota_keluarga</label>
					<input type="number" class="form-control" id="jumlah_anggota_keluarga" name="jumlah_anggota_keluarga" required autofocus>
					<small> - Jumlah Anggota Keluarga Penting untuk kami data</small>
				</div>
				<div class="input-group">
					<label for="no_kk">No. KK</label>
					<input type="number" class="form-control" id="no_kk" name="no_kk" required autofocus>
					<small> - Lorem</small>
				</div>
				<div class="input-group">
					<label for="foto">Foto Rumah</label><br />
					<div>
					<img id="image" src="../img/anon.png"  width="200px" height="200px" /><br />
						<input onchange="readURL(this);" type="file" name="foto" id="foto" accept="image/*">
					</div>
					<small class="text-muted"><?php echo isset($error['foto']) ? $error['foto'] : '';?></small>
				</div>
				<div class="input-group">
					<label for="diskripsi">Deskripsi Singkat</label>
					<textarea name="diskripsi" id="diskripsi" cols="1" maxlength=200 rows="3" class="form-control" required></textarea>
					<small> - Tulislah deskripsi dengan singkat, padat dan menarik mengenai kondisi rumah secara sekilas (maksimal 200 karakter)</small>
				</div>
				
				<br><br>
				<button type="submit" class="btn btn-primary" name="tambah_kms" style="float:right; padding:10px 25px 10px 25px; font-size:18px;">Lanjut <span class="glyphicon glyphicon-play"></span></button>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript" src="view/js/fungsi.js"></script>