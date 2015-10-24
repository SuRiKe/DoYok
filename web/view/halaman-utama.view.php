<div class="jumbotron judul-utama" style="margin-top:100px;">
	<div class="judul-utama-kata">
		<center>
		<img id="logo" src="img/doyok-pagi.png" width="30%" height="30%">
		<p><font size="5"><strong>( Donasi Yok! )</strong></font></p>
		</center>
	</div>
</div>
<div class="clearfix"></div>
<div class="container">
<<<<<<< HEAD
	<div class="row">
		<?php foreach ($k_miskin as $data): ?>
			<div class="col-md-4">
				<div class="row">
					<a href="?hal=detail&rumah=<?=$data['id_kms']?>" class="thumbnail">
						<img src="img/rumah_kmiskin/<?=$data['foto']?>" width="300px" style="max-height:300px;">
						<strong class="title">Rumah <?=$data['nama']?></strong>
						<p><?=substr($data['diskripsi'], 0,100)?></p>
						<div class="detail-donasi">
							<button class="btn btn-info">Donasi!</button>
						</div>
					</a>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>
<div style="margin-bottom:100px;"></div>