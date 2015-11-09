<div class="jumbotron judul-utama">
	<div class="judul-utama-kata">
		<center>
		<img id="logo" src="img/doyok-pagi.png" width="30%" height="30%">
		<p><font size="5"><strong>( Donasi Yok! )</strong></font></p>
		</center>
	</div>
</div>
<div class="clearfix"></div>
<div class="container" id="data-rumah">
	<div class="row">
		<?php foreach ($rumah as $data): ?>
			<div class="col-md-4 col-sm-6 col-xs-6">
				<div class="row thumb">
					<a href="?hal=detail&rumah='<?=$data['id_rumah']?>'" class="thumbnail">
						<img src="img/rumah_kmiskin/<?=$data['foto']?>" width="300px" style="max-height:300px;">
						<strong class="title"><center>Rumah <?=$data['nama']?></center></strong>
						<p><?=substr($data['diskripsi'], 0,100)?></p>
						<p><?=$data['pelapor']?></p>
					</a>
				<?php if (!$_SESSION['login_client']): ?>
					<a class="detail-donasi" href="?hal=masuk"><button class="btn btn-info" onclick="">Donasi!</button></a>
				<?php else: ?>
					<a class="detail-donasi" href="?hal=donasi&rumah=<?=$data['id_rumah']?>"><button class="btn btn-info" onclick="">Donasi!</button></a>
				<?php endif; ?>
				</div>
			</div>
		<?php endforeach ?>
	</div>
</div>
<div style="margin-bottom:100px;"></div>