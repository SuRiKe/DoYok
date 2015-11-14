<?php 
	use app\module\Fungsi as Fung; 
	use app\module\Rumah;
?>
<div style="margin-top:150px;margin-bottom:100px;">
<div id="content" class="container">
	<?php foreach ($rumah as $kms): 
		$persentase = Rumah::persentase($kms['id_rumah'],$conn);
	?>
	<h1 class="text-center"><span class="kata-kedua">Rumah</span> <?=$kms['nama']?></h1>
	<hr class="hr-biru">
	<div class="row">
		<div class="col-lg-8 gallery">
			<div class="col-lg-12" style="margin-bottom:50px;">
				<center><img src="img/rumah_kmiskin/<?=$kms['foto']?>" alt="thumbnail"></center>
			</div>
		</div>
		<div class="col-lg-4 col-md-12">
			<div class="col-lg-12 sidebar-detail">
				<div>
					<h4><strong>Dana Terkumpul Rp. <?=Fung::uang($persentase['terkumpul']);?></strong></h4>
					<big>Dari total dibutuhkan Rp. <?=Fung::uang($persentase['dana']);?></big>
				</div>
				<br/>
				<hr class="hr-biru" style="padding-bottom: 0px;" />
				<div class="progress">
					<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="<?=$persentase['hasil']?>" aria-valuemin="0" aria-valuemax="100" style="width:<?=$persentase['hasil']?>%;">
						<?=$persentase['hasil'];?>% Dana Terkumpul
					</div>	
				</div>
				<br/><center>
				<div class="rumah">
					<a href="?hal=home#data-rumah" class="btn btn-info">Kembali</a>
					<?php if ($_SESSION['login_client']==false): ?>
						<a href="?hal=masuk" class="btn btn-info">Beri Donasi!</a>
					<?php else: ?>
						<a href="?hal=donasi&rumah=<?=$kms['id_rumah']?>" class="btn btn-info">Beri Donasi!</a>
					<?php endif; ?>
				</div></center>
			</div>
			<div class="clearfix"></div>
			<hr style="border-top:1px solid #333;" />
			<div class="row">
				<div class="col-md-12 col-sm-12 orang">
					<h3>Dia yang Peduli</h3>
					<div class="col-md-6">
						<center>
							<img src="img/thumb.png" class="icon">
							<h4>Nama Pelapor</h4>
						</center>
					</div>
					<div class="col-md-6"></div>
				</div>
				<div class="col-md-12 col-sm-12 orang">
					<h3>Dia yang Membantu</h3>
					<div class="col-md-6">
						<center>
							<img src="img/thumb.png" class="icon">
							<h4>Nama Kontraktor</h4>
						</center>
					</div>
					<div class="col-md-6"></div>
				</div>
			</div>
		</div>
		<div class="col-lg-8 tab-detail">
			<ul class="nav nav-tabs">
				<li class="active"><a data-toggle="tab" href="#detail">Detail</a></li>
				<li><a data-toggle="tab" href="#keperluan">Keperluan</a></li>
				<li><a data-toggle="tab" href="#perkembangan">Perkembangan</a></li>
			</ul>

			<div class="tab-content">
				<div id="detail" class="tab-pane fade in active">
					<h3>Detail</h3>
					<p><?=$kms['diskripsi']; ?></p>
				</div>
				<div id="keperluan" class="tab-pane fade">
					<h3>Keperluan</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium dolorum enim nulla aspernatur debitis sint eveniet sapiente voluptatem dolores, rerum, sunt magni reprehenderit delectus. Saepe minima dolorem impedit ratione.</p>
				</div>
				<div id="perkembangan" class="tab-pane fade">
					<h3>Perkembangan</h3>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius praesentium dolorum enim nulla aspernatur debitis sint eveniet sapiente voluptatem dolores, rerum, sunt magni reprehenderit delectus. Saepe minima dolorem impedit ratione.</p>
				</div>
			</div>
		</div>
	</div>
<?php endforeach ?>
</div>
</div>