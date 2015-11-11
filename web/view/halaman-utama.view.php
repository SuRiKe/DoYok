<?php 
use app\module\Fungsi as Fung; 
use app\module\Rumah;
use app\module\Donasi;
?>
<div class="jumbotron judul-utama">
	<div class="judul-utama-kata">
		<center>
		<img id="logo" src="img/doyok-pagi.png" width="30%" height="30%">
		<p><font size="5">Masih Banyak dari Mereka Yang Memerlukan Bantuan Kita</font></p>
		</center>
	</div>
</div>
<div class="clearfix"></div>
<div class="container" id="data-rumah">
	<center>
	<h1 class="text-center"><b><span class="kata-kedua">Mari Bantu Sesama</span></b></h1>
	<h4>Menyisihkan sedikit harta kita untuk hal baik termasuk amal ibadah</h4>
	<br>
	<hr class="hr-biru">
	</center>
	<div class="row">
		<?php foreach ($rumah as $data): 
			$persentase = Rumah::persentase($data['id_rumah'],$conn);
			$jumlah_donatur = Donasi::jumlahDonatur($data['id_rumah'],$conn);
		?>
			<div class="col-md-4 col-sm-6 col-xs-6">
				<div class="row thumb">
					<a href="?hal=detail&rumah='<?=$data['id_rumah']?>'" class="thumbnail">
						<img src="img/rumah_kmiskin/<?=$data['foto']?>" width="300px" style="max-height:300px;">
						<strong class="title"><center>Rumah <?=$data['nama']?></center></strong>
						<p><?=substr($data['diskripsi'], 0,100)?></p>
						<h5><?=$data['alamat']?></h5>
						<div class="progress">
							<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?=$persentase['hasil']?>%" aria-valuemin="0" aria-valuemax="100" style="width:<?=$persentase['hasil']?>%;"> </div>	
						</div>
						<div class="bawah-progress">
							<div class="col-md-12">
								<div class="col-md-3 col-sm-3"><h6><?=$persentase['hasil']?>% </h6><label>Terkumpul</label></div>
								<div class="col-md-6 col-sm-6"><h6>Rp. <?=Fung::uang($persentase['dana']);?></h6><label>Diperlukan</label></div>
								<div class="col-md-3 col-sm-3"><h6><?=$jumlah_donatur?> </h6><label>Orang</label></div>
							</div>
						</div>
					</a>
				<?php if ($_SESSION['login_client']==false): ?>
					<a class="detail-donasi" href="?hal=masuk"><button class="btn btn-info" onclick="">Donasi!</button></a>
				<?php else: ?>
					<a class="detail-donasi" href="?hal=donasi&rumah=<?=$data['id_rumah']?>"><button class="btn btn-info" onclick="">Donasi!</button></a>
				<?php endif; ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>
<div class="container" id="data-rumah">
	<center>
	<h1 class="text-center"><b><span class="kata-kedua">Rasa Terima Kasih Dari Mereka</span></b></h1>
	<h4>Berkat Sumbangsih Masyarakat, Tempat Tinggal Mereka Kini Lebih Baik</h4>
	<br>
	<hr class="hr-biru">
	</center>
	<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-6">
				<div class="row thumb">
					<a href="#" class="thumbnail">
						<img src="img/rumah_kmiskin/rumah runtuh.jpg" width="300px" style="max-height:300px;">
						<strong class="title"><center>Rumah Pak Maman</center></strong>
						<p>Bla bla bla</p>
						<h5>JL. Mana aja</h5>
						<div class="progress">
							<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="100%" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> </div>	
						</div>
						<div class="bawah-progress">
							<div class="col-md-12">
								<div class="col-md-3 col-sm-3"><h6>100% </h6><label>Terkumpul</label></div>
								<div class="col-md-6 col-sm-6"><h6>Rp. 12.000.000.-</h6><label>Diperlukan</label></div>
								<div class="col-md-3 col-sm-3"><h6>200 </h6><label>Orang</label></div>
							</div>
						</div>
					</a>
					<a class="detail-donasi" href="?hal=masuk"><button class="btn btn-info" onclick="">Donasi!</button></a>
				</div>
			</div>
	</div>
</div>
<div class="container" id="data-rumah">
	<center>
	<h1 class="text-center"><b><span class="kata-kedua">Rasa Terima Kasih Dari Mereka</span></b></h1>
	<h4>Berkat sumbangsih masyarakat, kini rumah mereka layak di tempati</h4>
	<br>
	<hr class="hr-biru">
	</center>
	<div class="row">
			<div class="col-md-4 col-sm-6 col-xs-6">
				<div class="row thumb">
					<a href="?hal=detail&rumah='<?=$data['id_rumah']?>'" class="thumbnail">
						<img src="img/rumah_kmiskin/rumah runtuh.jpg" width="300px" style="max-height:300px;">
						<strong class="title"><center>Rumah Ahmad Sulaeman</center></strong>
						<p>Rumah Pak ahmad tidak layak di tempati, mohon bantuan untuk membedah rumah pak ahmad</p>
						<h5>JL. Kamboja no 12</h5>
						<div class="progress">
							<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="100%" aria-valuemin="0" aria-valuemax="100" style="width:100%;"> </div>	
						</div>
						<div class="bawah-progress">
							<div class="col-md-12">
								<div class="col-md-3 col-sm-3"><h6>100% </h6><label>Terkumpul</label></div>
								<div class="col-md-6 col-sm-6"><h6>Rp. 12.000.000.-</h6><label>Diperlukan</label></div>
								<div class="col-md-3 col-sm-3"><h6>1 </h6><label>Orang</label></div>
							</div>
						</div>
					</a>
				<?php if ($_SESSION['login_client']==false): ?>
					<a class="detail-donasi" href="?hal=masuk"><button class="btn btn-info" onclick="">Donasi!</button></a>
				<?php else: ?>
					<a class="detail-donasi" href="?hal=donasi&rumah=<?=$data['id_rumah']?>"><button class="btn btn-info" onclick="">Donasi!</button></a>
				<?php endif; ?>
				</div>
			</div>
	</div>
</div>
<div class="banner">
	<div class="jumbotron banner">
		<div class="judul-utama-kata">
			<center>
				<h1>Partisipasi Masyarakat Sangat Dibutuhkan</h1>
				<p>Ingin ikut andil dalam mensejahterakan Masyarakat sekitar? Mulailah dari sekarang!</p>
			<?php if ($_SESSION['login_client']==false): ?>
				<a href="?hal=masuk" class="btn btn-primary">Lapor Sekarang</a>
			<?php else: ?>
				<a href="?hal=lapor" class="btn btn-primary">Lapor Sekarang</a>
			<?php endif; ?>
			</center>
		</div>
	</div>
</div>