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
    <!-- <link href='https://fonts.googleapis.com/css?family=Raleway:400,700' rel='stylesheet' type='text/css'> -->

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script src="js/jquery-2.1.3.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </head>
<body style="background-color:#878AC6;margin-top:100px">
<div class="container">
	<div class="col-md-3 profile">
		<img src="../img/anon.png" alt="foto profil">
		<ul class="nav nav-pills nav-stacked">
			<br>
			<li class="active"><a href="#">Edit Profile</a></li>
			<li><a href="#">Lorem</a></li>
			<li><a href="#">Ipsum</a></li>
			<li><a href="#">Dhoyok</a></li>
		</ul>
	</div>
	<div class="col-md-9 edit-profile">
		<form action="" method="post">
			<fieldset><legend>Profil Anda</legend>
				<div class="col-md-6">
					<div class="form-group">
						<label for="foto">Foto Profil</label><br />
						<div>
						<center><img id="image" src="../img/anon.png"  width="150px" height="150px" /></center><br />
							<input onchange="readURL(this);" type="file" name="foto" id="foto" accept="image/*">
						</div>
						<small class="text-muted"><?php echo isset($error['foto']) ? $error['foto'] : '';?></small>
					</div>
					<div class="form-group">
						<label for="provinsi">Provinsi</label>
						<select name="provinsi" id="provinsi" class="form-control">
							<option value="">-- Pilih Provinsi --</option>
							<option value="">Bali</option>
							<option value="">Jawa Barat</option>
							<option value="">Papua Barat</option>
						</select>
					</div>
					<div class="form-group">
						<label for="kota">Kota</label>
						<input type="text" class="form-control" name="kota" placeholder="Kota">
					</div>
					<div class="form-group">
						<label for="alamat">Alamat</label>
						<textarea class="form-control" name="alamat" id="alamat" cols="30" rows="5" placeholder="Alamat"></textarea>
					 </div>
				</div>


				<div class="col-md-6">
					<div class="form-group">
						<label for="nama">Nama Lengkap</label>
						<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap" autofocus>
					</div>
					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<label for="user">Username</label>
						<input type="text" class="form-control" name="user" placeholder="Username">
					</div>
					<div class="form-group">
						<label for="telp">No Telpon</label>
						<input type="number" class="form-control" name="telp" placeholder="No Telpon">
					</div>
				</div>
				<div class="clearfix"></div>
				<fieldset><legend>Ganti Password</legend>
					<div class="form-group">
						<label for="pass">Password</label>
						<input type="password" onkeyup="passwordClick();" class="form-control password" name="pass" placeholder="Password">
					</div>
					<div class="form-group">
						<label for="k-password">Tulis Ulang Password</label>
						<input type="password" class="form-control" name="k-pass" placeholder="Konfirmasi Password">
					</div>
				</fieldset>
				<div class="clearfix"></div>
				<div class="form-group">
					<center style="padding:10px;">
						<button type="submit" class="btn btn-primary" name="simpan" style="margin-right:10px;">Simpan</button>
						<button type="reset" class="btn btn-primary" name="batal">Batal</button>
					</center>
				</div>
			</fieldset>
		</form>
	</div>
</div>
<div style="margin-bottom:50px;">
</body>
</html>
<?php
include 'footer.view.php';