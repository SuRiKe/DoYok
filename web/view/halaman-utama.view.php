<div class="jumbotron judul-utama" style="margin-top:100px;">
	<div class="judul-utama-kata">
		<center>
		<img id="logo" src="img/doyok-pagi.png" width="20%" height="20%">
		<p>Donasi Yok!</p>
		<a href="donasi.php" class="btn btn-info">Donasi Sekarang</a>
		</center>
	</div>
</div>
<div class="clearfix"></div>
<div class="container">
<div class="row">
	<div class="form-control">
		<p>K. Mis <a style="float:right;" href="lengkap.php">Selengkapnya</a></p>
	</div>
	<?php foreach ($k_miskin as $data): ?>
		<div class="col-md-4">
			<div class="row">
				<a href="?hal=detail&rumah='<?=$data['id_kms']?>'" class="thumbnail">
					<img src="img/rumah_kmiskin/<?=$data['foto']?>">
					<strong class="title">Rumah <?=$data['nama']?></strong>
					<p><?=substr($data['diskripsi'], 0,255)?></p>
				</a>
				<div class="detail-donasi">
					<button class="btn btn-info">Donasi!</button>
				</div>
			</div>
		</div>
	<?php endforeach ?>
</div>
</div>