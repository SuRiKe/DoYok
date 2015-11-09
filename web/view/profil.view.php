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
  </head>
  <body style="background-color:#878AC6;margin-top:100px">
<div class="container">
	<div class="col-md-4"> </div>
	<div class="col-md-8 edit-profile">
		<form action="" >
			<fieldset class="form-group">
				<label for="foto">Foto Profil</label><br />
				<div>
				<img id="image" src="img/api.png"  width="200px" height="200px" /><br />
					<input onchange="readURL(this);" type="file" name="foto" id="foto" accept="image/*">
				</div>
				<small class="text-muted"><?php echo isset($error['foto']) ? $error['foto'] : '';?></small>
			</fieldset>
			<fieldset class="form-group">
				<label for="uname">Nama Pengguna</label>
				<input type="text" class="form-control" name="uname" placeholder="Nama Pengguna">
			</fieldset>
			<fieldset class="form-group">
				<label for="nama">Nama Lengkap</label>
				<input type="text" class="form-control" name="nama" placeholder="Nama Lengkap">
			</fieldset>
			<fieldset class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" placeholder="Email">
			</fieldset>
			<fieldset class="form-group">
				<label for="telp">No Telepon</label>
				<input type="text" class="form-control" name="telp" placeholder="No Telepon">
			</fieldset>
			<fieldset class="form-group">
			<center style="padding:10px;">
				<button type="submit" class="btn btn-primary" name="simpan" style="margin-right:10px;">Simpan</button>
				<button type="reset" class="btn btn-primary" name="batal">Batal</button>
			</center>
			</fieldset>
		</form>
	</div>
</div>
</body>
</html>