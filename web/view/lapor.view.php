<div style="margin-top:150px;margin-bottom:150px;">
	<div class="container">
		<h1><center>Tambah Keluarga Miskin</center></h1>
		<hr>
		<?php echo isset($msg['tambah_kms']) ? $msg['tambah_kms'] : '';?>
		<form action="?hal=lapor1" method="post" enctype="multipart/form-data">
			<div class="col-md-10 col-md-offset-1 col-sm-12">
				<fieldset><legend><b>Judul & Deskripsi Singkat</b></legend>
				  	<div class="input-group">
						<label for="judul">Judul</label>
						<input type="text" class="form-control" id="judul" required autofocus>
						<small> - Masukkan judul yang menarik</small>
					</div>
					<div class="input-group">
						<label for="deskripsi">Deskripsi Singkat</label>
						<textarea name="deskripsi" id="deskripsi" cols="1" maxlength=200 rows="3" class="form-control" required></textarea>
						<small> - Tulislah deskripsi dengan singkat, padat dan menarik mengenai kondisi rumah secara sekilas (maksimal 200 karakter)</small>
					</div>
				</fieldset>
				<br>
				<br>
				<fieldset><legend><b>Lokasi Pembedahan</b></legend>
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3944.5597688698304!2d115.25267831438629!3d-8.638190690218433!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd23f8de89e2531%3A0xa554a15e7d37efe4!2sBali+Creative+Industry+Center%2C+Tohpati!5e0!3m2!1sen!2sid!4v1447082328605" 
					width="100%" height="250" frameborder="0" style="border:0" allowfullscreen></iframe>
				</fieldset>
				<br><br>
				<button type="submit" class="btn btn-primary" name="tambah_kms" style="float:right; padding:10px 25px 10px 25px; font-size:18px;">Lanjut <span class="glyphicon glyphicon-play"></span></button>
			</div>
		</form>
	</div>
</div>
<script type="text/javascript" src="view/js/fungsi.js"></script>