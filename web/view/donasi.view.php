<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>D  oYo  K</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.formatCurrency-1.4.0.js"></script>
   </head>
<body>
<div class="container">
<div class="col-md-8 col-md-offset-2 login-form">
	<h1><center>Donasi Anda</center></h1>
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
				<small class="text-muted"><?php echo isset($error['jumlah']) ? $error['username'] : '';?></small>
			  </fieldset>
			  <button type="submit" class="btn btn-primary" name="donasi">Donasi</button>
			</form>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="tab-semen">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#semen" aria-expanded="false" aria-controls="collapseTwo">
	          Donasi Dengan Semen
	        </a>
	      </h4>
	    </div>
	    <div id="semen" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	      <div class="panel-body">
	        <!-- Donasi Pake Bahan -->
	       	<form method="post">
			  <fieldset class="form-group">
			  	<h3>Sumbang Semen</h3>
				<div class="col-md-4">
					<label for="harga">Harga Satuan</label>
					<input type="text" class="harga col-md-2 form-control" value="150000" name="harga" readonly>
					<input type="hidden" class="hargax" value="150000">
				</div>
				<div class="col-md-4">
					<label for="jumlah">Jumlah</label>
					<input type="number" class="jumlah col-md-2 form-control">
				</div>
				<div class="col-md-4">
					<label for="total">Total</label>
					<input type="text" class="total col-md-2 form-control" name="total" readonly>
				</div>
			  </fieldset>
			  <button type="submit" class="btn btn-primary" name="donasi">Donasi</button>
			</form>
			<script>
				$( document ).ready(function() {
				    $(".harga").formatCurrency();
				});
				$(".jumlah").keyup(function(){
					var total = $(".hargax").val() * $(this).val();
					$(".total").val(total).formatCurrency();
				});
			</script>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="tab-pasir">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#pasir" aria-expanded="false" aria-controls="collapseTwo">
	          Donasi Dengan Pasir
	        </a>
	      </h4>
	    </div>
	    <div id="pasir" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	      <div class="panel-body">
	        <!-- Donasi Pake Bahan -->
	       	<form method="post">
			  <fieldset class="form-group">
			  	<h3>Sumbang Pasir</h3>
				<div class="col-md-4">
					<label for="harga">Harga Satuan</label>
					<input type="text" class="col-md-2 form-control" name="harga" value="Rp. 150.000,-" readonly>
				</div>
				<div class="col-md-4">
					<label for="jumlah">Jumlah</label>
					<input type="number" class="col-md-2 form-control">
				</div>
				<div class="col-md-4">
					<label for="total">Total</label>
					<input type="text" class="col-md-2 form-control" name="total" readonly>
				</div>
			  </fieldset>
			  <button type="submit" class="btn btn-primary" name="donasi">Donasi</button>
			</form>
	      </div>
	    </div>
	  </div>
	  <div class="panel panel-default">
	    <div class="panel-heading" role="tab" id="tab-batu">
	      <h4 class="panel-title">
	        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#batu" aria-expanded="false" aria-controls="collapseTwo">
	          Donasi Dengan Batu
	        </a>
	      </h4>
	    </div>
	    <div id="batu" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
	      <div class="panel-body">
	        <!-- Donasi Pake Bahan -->
	       	<form method="post">
			  <fieldset class="form-group">
			  	<h3>Sumbang Batu</h3>
				<div class="col-md-4">
					<label for="harga">Harga Satuan</label>
					<input type="text" class="col-md-2 form-control" name="harga" value="Rp. 150.000,-" readonly>
				</div>
				<div class="col-md-4">
					<label for="jumlah">Jumlah</label>
					<input type="number" class="col-md-2 form-control">
				</div>
				<div class="col-md-4">
					<label for="total">Total</label>
					<input type="text" class="col-md-2 form-control" name="total" readonly>
				</div>
			  </fieldset>
			  <button type="submit" class="btn btn-primary" name="donasi">Donasi</button>
			</form>
	      </div>
	    </div>
	  </div>
	</div>
</div>
</div>
</body>
</html>
<div class="col-md-6 col-md-offset-3 login-form">
	<h1><center>Pembayaran</center></h1>
	<hr>
	<font size="5">
		<p>
			<center>Anda dapat memilih beberapa jalur pembayaran melalui fasilitas yang kami sediakan.<br>Berikut merupakan beberapa jalur pembayaran yang kami sediakan : </center>
		</p>
	</font>
</div>
<div class="col-md-10 col-md-offset-1" style="margin-bottom:150px;">
	<a href="bca" class="col-md-3">
		<div class="thumbnail">
			<img src="img/pembayaran/bca.png"><br>
			<p>
				No rek : 12039123<br>
				A / N : Team Suriken
			</p>
		</div>
	</a>
	<a href="mandiri" class="col-md-3">
		<div class="thumbnail">
			<img src="img/pembayaran/mandiri.png"><br>
			<p>
				No rek : 132.123.4123<br>
				A / N : Team Suriken
			</p>
		</div>
	</a>
	<a href="bni" class="col-md-3">
		<div class="thumbnail">
			<img src="img/pembayaran/bni.png"><br>
			<p>
				No rek : 3102-312-3123<br>
				A / N : Team Suriken
			</p>
		</div>
	</a>
	<a href="mega" class="col-md-3">
		<div class="thumbnail">
			<img src="img/pembayaran/mega.png"><br>
			<p>
				No rek : 12398.12.123<br>
				A / N : Team Suriken
			</p>
		</div>
	</a>
</div>
>>>>>>> 5c9c2e7c8eb8ab509ea92eb145cc102bf1827738
