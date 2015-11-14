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
					<div class="col-md-4">
						<center>
							<img src="img/thumb.png" class="icon rounded-image">
						</center>
					</div>
					<div class="col-md-8">
						<h5>Dia yang Peduli</h5>
						<h4>Nama Pelapor</h4>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 orang" style="margin-bottom:-10px;">
					<div class="col-md-4">
						<center>
							<img src="img/thumb.png" class="icon rounded-image">
						</center>
					</div>
					<div class="col-md-8">
						<h5>Kontraktor</h5>
						<h4>Nama Kontraktor</h4>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 orang">
					<div class="col-md-4">
						<center>
							<img src="img/thumb.png" class="icon rounded-image bawahin">
						</center>
					</div>
					<div class="col-md-8">
						<h5>Kepala Desa</h5>
						<h4>Nama Kepala Desa</h4>
						<h4>Telp Kepala Desa</h4>
					</div>
				</div>
				<div class="col-md-12 col-sm-12 orang">
					<div class="col-md-4">
						<center>
							<img src="img/thumb.png" class="icon rounded-image bawahin">
						</center>
					</div>
					<div class="col-md-8">
						<h5>Kepala RT</h5>
						<h4>Nama Kepala RT</h4>
						<h4>Telp Kepala RT</h4>
					</div>
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
					<div class="panel panel-default">
					  <table class="table">
					    <tr>
					    	<th>No.</th>
					    	<th>Nama Bahan</th>
					    	<th>Harga Satuan</th>
					    	<th>Jumlah</th>
					    	<th>Total</th>
					    </tr>
					    <tr>
					    	<td>1</td>
							<td>Semen</td>
							<td>30000</td>
							<td>5</td>
							<td>150000</td>
						</tr>
						<tr>
							<td>2</td>
							<td>Pasir</td>
							<td>35000</td>
							<td>2</td>
							<td>70000</td>
					    </tr>
					  </table>
					</div>
				</div>
				<div id="perkembangan" class="tab-pane fade">
					<div class="col-md-12">
					<h1 class="text-center" style="padding-bottom:35px;">Perkembangan</h1>
					<div class="col-md-12">
						<div class="col-md-6 kiri col-sm-6">
							<span class="asdf"> </span>
							<small>30 Oktober 2015</small>
							<h2>Mulai Pembangunan</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptas, consequatur harum deleniti, aspernatur voluptatum ullam. Vitae, sequi, nobis. Repellendus ipsum iusto fugit quibusdam aspernatur maiores, quis fuga maxime illum cumque.</p>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-6 col-sm-6 kanan">
							<span class="asdf"> </span>
							<small>3 November 2015</small>
							<h2>Proses Pembangaunan</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium ex, nisi mollitia suscipit iusto beatae architecto ratione optio velit sunt reprehenderit natus esse illum? Provident at minus atque ut doloribus?</p>
						</div>
					</div>
					<div class="col-md-12">
						<div class="col-md-6 col-sm-6 kiri">
							<span class="asdf"> </span>
							<small>15 Novembar 2015</small>
							<h2>Pembangunan Selesai</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tenetur vel consequuntur voluptatibus distinctio nobis, incidunt aliquam harum ducimus rerum vero temporibus ea aperiam, molestias quo, iure provident dolores molestiae quos.</p>
						</div>
					</div>
				</div>
				</div>
			</div>
		</div>
	</div>
<?php endforeach ?>
</div>
</div>