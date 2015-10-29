<?php use app\module\Fungsi as Fung; ?>
<div style="margin-top:150px;margin-bottom:100px;">
<div id="content" class="container">
	<?php foreach ($kmiskin as $kms): ?>
	<?php echo isset($msg['donasi']) ? $msg['donasi'] : '';?>
	<h1 class="text-center"><span class="kata-kedua">Rumah</span> <?=$kms['nama']?></h1>
	<hr class="hr-biru">
	<div class="row">
		<div class="col-lg-8 gallery">
			<div class="col-lg-12">
				<center><img width="80%" height="" src="img/rumah_kmiskin/<?=$kms['foto']?>" alt="thumbnail"></center>
			</div>
			<div class="col-lg-12 detail">
				<p><?=$kms['diskripsi']; ?></p>
			</div>
		</div>
		<div class="col-lg-4 sidebar-detail">
			<div>
				<h4><strong>Dana Terkumpul Rp. <?=Fung::uang($kms['terkumpul']);?></strong></h4>
				<small>Dari total dibutuhkan Rp. <?=Fung::uang($kms['dana']);?></small>
			</div>
			<br>
			<hr class="hr-biru">
			<div class="progress">
				<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?=$persentase?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$persentase?>%;"></div>	
			</div>
			<strong><center><a><?=$persentase;?>% Dana Terkumpul</a></center></strong>
			<br>
			<div class="detail-donasi">
				<?php if (!$_SESSION['login_client']): ?>
					<a href="?hal=login" class="form-control donasi-detail">Beri Donasi!</a>
				<?php else: ?>
					<a href="?hal=donasi&rumah=<?=$kms['id_kms']?>" class="form-control donasi-detail">Beri Donasi!</a>
				<?php endif; ?>
			</div>
			<div class="clearfix"></div><br>
			<div class="row">
				<div class="col-md-6">
					<a href="#" class="icon thumbnail">
						<center><img src="img/thumb.png" class="rounded-image icon"></center>
						<p>Kontraktor</p>
					</a>
				</div>
				<div class="col-md-6">
					<a href="#" class="icon thumbnail">
						<center><img src="img/thumb.png" class="rounded-image icon"></center>
						<p>Pelapor</p>
					</a>
				</div>
			</div>
		</div>
	</div>
<?php endforeach ?>
</div>
</div>