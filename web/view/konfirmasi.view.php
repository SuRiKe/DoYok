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
<div class="col-md-8 col-md-offset-2">
	<h1><center>Donasi Anda</center></h1>
	<div class="col-md-12 proses-donasi">
		<a href="donasi.view.php"><div class="col-md-4 text-center ki">Pilihan Donasi</div></a>
		<a href="bayar.view.php"><div class="col-md-4 text-center">Detail Donasi</div></a>
		<a href="konfirmasi.view.php"><div class="col-md-4 text-center ka">Konfirmasi Donasi</div></a>
	</div>
	<hr>
	<form method="post">
	  <fieldset class="form-group">
		<label for="nama">Nama Penarsfer</label>
		<input type="text" nama="nama" class="form-control" placeholder="Nama Penransfer">
	  </fieldset>
	  <fieldset class="form-group">
		<label for="no">No. Rek Penarsfer</label>
		<input type="text" nama="no" class="form-control" placeholder="Nomor Rekening Penransfer">
	  </fieldset>
	  <fieldset class="form-group">
	  	<label for="tujuan">Tujuan Transfer</label>
	  	<select name="tujuan" class="form-control">
	  		<option value=""> BRI | Tim SuRiKen | 7423-12421</option>
	  		<option value=""> BCA | Suci | 213-124-12-1412</option>
	  		<option value=""> BNI | Rizal | 345.1235.133.23</option>
	  		<option value=""> Mandiri | Keramas | 8524361244</option>
	  	</select>
	  </fieldset>
	  <button type="submit" class="btn btn-primary" name="konfirmasi">Konfirmasi</button>
	</form>
</div>
</div>
</body>
</html>