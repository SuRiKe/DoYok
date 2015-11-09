<div style="margin-top:150px;margin-bottom:150px;">
	<div class="container">
		<h1><center>Tambah Keluarga Miskin</center></h1>
		<hr>
		<?php echo isset($msg['tambah_kms']) ? $msg['tambah_kms'] : '';?>
		<form method="post" enctype="multipart/form-data">
			<div class="col-md-10 col-md-offset-1 col-sm-12">
				<fieldset><legend><b>Alokasi Pendanaan</b></legend>
					<div class="col-md-5">
						<label for="panjangs">Panjang</label>
						<input type="number" min="1" class="form-control" id="panjang" required autofocus>
					</div>
					<div class="col-md-5">
						<label for="lebar">Lebar</label>
						<input type="number" min="1" class="form-control" id="lebar" required>
					</div>
					<div class="col-md-2">
						<label for="satuan">Satuan</label>
						<select name="satuan" id="satuan" class="form-control">
							<option value="are">Are</option>
							<option value="meter">Meter</option>
						</select>
					</div>
					<div class="estimasi">
						<h1>Alokasi Harga : Rp. 12.000.000<br><small>Estimasi Waktu : 12 bulan</small></h1>
						<div class="clearfix"></div>
						<br>
						<font size="5">
							<p>
								<ol><strong>Bahan Keperluan :</strong>
									<li>Kayu : 5 ton</li>
									<li>Semen : 12 sak</li>
									<li>Pasir Halus : 100 sak</li>
									<li>Cat Dasar : 12 ember</li>
								</ol>
							</p>
						</font>
					</div>
				</fieldset>
				<br><br>
				<button type="submit" class="btn btn-primary" name="tambah_kms" style="float:right; padding:10px 25px 10px 25px; font-size:18px;">Kirim <span class="glyphicon glyphicon-play"></span></button>
			</div>
	</div>
</div>
<script type="text/javascript" src="view/js/fungsi.js"></script>