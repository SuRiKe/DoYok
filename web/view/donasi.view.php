<div class="container">
<div class="col-md-8 col-md-offset-2 login-form">
	<h1><center>Donasi Anda</center></h1>
	<div class="col-md-12 proses-donasi">
		<a href="donasi.view.php"><div class="col-md-4 text-center ki">Pilihan Donasi</div></a>
		<a href="bayar.view.php"><div class="col-md-4 text-center">Detail Donasi</div></a>
		<a href="konfirmasi.view.php"><div class="col-md-4 text-center ka">Konfirmasi Donasi</div></a>
	</div>
	<hr>
	<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">	
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="headingOne">
	      <h4 class="panel-title">
	        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#kastem" aria-expanded="true" aria-controls="collapseOne">
	          Donasi Sesuai Keinginan Anda
	        </a>
	      </h4>
	    </div>
	    <div id="kastem" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
	      <div class="panel-body">
	      	<!-- Donasi Sesuai Keinginan -->
	        <form method="post">
			  <fieldset class="form-group">
				<label for="jumlah">Jumlah</label>
				RP<input type="number" class="form-control" id="jumlah" name="jumlah" placeholder="Jumlah Donasi" required autofocus>
				<small class="text-muted"><?php echo isset($error['jumlah']) ? $error['jumlah'] : '';?></small>
				<input type="hidden" name="keperluan" value="">
			  </fieldset>
			  <button type="submit" class="btn btn-primary" name="donasi">Donasi</button>
			</form>
	      </div>
	    </div>
	  </div>
	  <?php foreach ($keperluan as $data): ?>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="tab-<?= $data['keperluan']; ?>">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#<?= $data['keperluan']; ?>" aria-expanded="false" aria-controls="collapseTwo">
	          Donasi Dengan <?= $data['keperluan']; ?>
	        </a>
	      </h4>
	    </div>
	    <div id="<?= $data['keperluan']; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	      <div class="panel-body">
	        <!-- Donasi Pake Bahan -->
	       	<form method="post" class="<?=$data['keperluan']?>">
			  <fieldset class="form-group">
			  	<h3>Sumbang <?=$data['keperluan']?></h3>
				<div class="col-md-4">
					<label for="harga">Harga Satuan</label>
					<input type="text" class="harga col-md-2 form-control" value="<?=$data['harga_satuan']?>" name="harga" readonly>
					<input type="hidden" class="hargax-<?=$data['keperluan']?>" value="<?=$data['harga_satuan']?>">
					<input type="hidden" class="v" value="<?=$data['keperluan']?>">
					<input type="hidden" name="keperluan" value="<?=$data['id_keperluan']?>">
				</div>
				<div class="col-md-4">
					<label for="jumlah">Jumlah</label>
					<input type="number" max="<?=$data['jumlah'];?>" name="jumlah-qty" class="jumlah<?=$data['keperluan']?> col-md-2 form-control">
				</div>
				<div class="col-md-4">
					<label for="total">Total</label>
					<input type="text" class="total<?=$data['keperluan']?> col-md-2 form-control" name="total" readonly>
					<input type="hidden" class="totals<?=$data['keperluan']?>" name="totals">
				</div>
			  </fieldset>
			  <button type="submit" class="btn btn-primary" name="donasi">Donasi</button>
			</form>
	      </div>
	    </div>
	  </div>
	  <script>
	  	$( document ).ready(function() {
	  		var v = <?php echo json_encode($data['keperluan']);?>;
		   	var c = ".hargax-"+v;
		   	console.log(c);
		    $(".harga").formatCurrency();
			
			$(".jumlah"+v).keyup(function(){
				var total = $(c).val() * $(this).val();
				$(".totals"+v).val(total);
				$(".total"+v).val(total).formatCurrency();
			});
		});
	  </script>
	  <?php endforeach;?>
	</div>
</div>
</div>
</div>