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
		<?php use app\module\Fungsi as Fung; ?>
		<?php foreach ($rumah as $data): ?>
			<?php 
				$terkumpul = $data['terkumpul'];
				$dana = $data['dana'];
				$persentase = $terkumpul/$dana*100;

				$query = "SELECT count(id_rumah) as jumlah_donatur from tbl_donasi where id_rumah=:id";
				$res = Fung::eksekusi($query,array('id'=>$data['id_rumah']),$conn);
				$jumlah_donatur = $res[0]['jumlah_donatur'];
			 ?>
			<div class="col-md-4 col-sm-6 col-xs-6">
				<div class="row thumb">
					<a href="?hal=detail&rumah='<?=$data['id_rumah']?>'" class="thumbnail">
						<img src="img/rumah_kmiskin/<?=$data['foto']?>" width="300px" style="max-height:300px;">
						<strong class="title"><center>Rumah <?=$data['nama']?></center></strong>
						<p><?=substr($data['diskripsi'], 0,100)?></p>
						<h5><?=$data['alamat']?></h5>
						<div class="progress">
							<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="<?=$persentase?>%" aria-valuemin="0" aria-valuemax="100" style="width:<?=$persentase?>%;"> </div>	
						</div>
						<div class="bawah-progress">
							<div class="col-md-12">
								<div class="col-md-4"><h6><?=$persentase?>% </h6><label>Terkumpul</label></div>
								<div class="col-md-5"><h6>Rp. <?=Fung::uang($data['dana']);?></h6><label>Diperlukan</label></div>
								<div class="col-md-3"><h6><?=$jumlah_donatur?> </h6><label>Orang</label></div>
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
		<?php endforeach ?>
	</div>
</div>