<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<title>Login Admin Panel Doyok</title>

    <!-- Bootstrap -->
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../css/style-admin.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body class="login-admin-body">
	<div class="col-md-offset-1 col-md-6">
		<div class="jumbotron">
			<h1><span class="glyphicon glyphicon-chevron-up"></span> DoYok <span class="glyphicon glyphicon-chevron-down"></span></h1>
			<p>Doyok adalah aplikasi yang dapat membatu para donatur berdonasi hingga sampai kepada yang membutukan</p>
			<a href="../.." class="btn btn-primary form-control">Website</a>
		</div>
	</div>
	<div class="col-md-4">
		<div class="form-login-admin">
			<form action="" method="post">
			<center><h1>Login Admin Panel</h1></center>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Username Anda" required autofocus>
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="Password Anda" required>
				</div>
				<input class="btn btn-info form-control" type="submit" value="Masuk">
			</form>
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../js/bootstrap.min.js"></script>
</body>
</html>