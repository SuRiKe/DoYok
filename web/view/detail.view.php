<div id="content" class="container">
	<?php foreach ($kmiskin as $kms): ?>
	<h1 class="text-center">Rumah <?=$kms['nama']?></h1>
	<hr>
	<div class="row">
		<div class="col-lg-12 gallery">
			<div class="col-lg-3">
				<img class="img-responsive" src="img/rumah_kmiskin/<?=$kms['foto']?>" alt="thumbnail">
			</div>
			<div class="col-lg-3">
				<img class="img-responsive" src="img/rumah_kmiskin/<?=$kms['foto']?>" alt="thumbnail">
			</div>
			<div class="col-lg-3">
				<img class="img-responsive" src="img/rumah_kmiskin/<?=$kms['foto']?>" alt="thumbnail">
			</div>
			<div class="col-lg-3">
				<img class="img-responsive" src="img/rumah_kmiskin/<?=$kms['foto']?>" alt="thumbnail">
			</div>
		</div>
		<div class="col-lg-12 detail container">
			<?=$kms['diskripsi']; ?>
		</div>
		<div class="col-lg-12">
			<div class="col-md-10">
				<div class="progress">
					<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?=$persentase?>" aria-valuemin="0" aria-valuemax="100" style="width: <?=$persentase?>%;">
						<?=$persentase;?>% Complete
					</div>
				</div>
			</div>
			<div class="col-md-2 tengah">
				<a href="?hal=donasi&rumah=<?=$kms['id_kms']?>" class="btn btn-primary dropdown-toggle">Donasi</a>
			</div>
		</div>
	</div>
<?php endforeach ?>
</div>