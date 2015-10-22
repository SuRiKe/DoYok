<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>DoYok</title>
	<link rel="stylesheet" href="../css/bootstrap.min.css">
	<link rel="stylesheet" href="../css/style.css">
</head>
<body>


<div id="header">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Logo</a>
	    </div>

	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
	      <ul class="nav navbar-nav">
	        <li class="active"><a href="#">Home <span class="sr-only">(current)</span></a></li>
	        <li><a href="#">Daftar</a></li>
	        <li><a href="#">Login</a></li>
	      </ul>
	      <form class="navbar-form navbar-left" role="search">
	        <div class="form-group">
	          <input type="text" class="form-control" placeholder="Search">
	        </div>
	        <button type="submit" class="btn btn-default">Search</button>
	      </form>

	    </div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>


<div id="content" class="container">
	<h1 class="text-center">Keluarga Miskin</h1>
	<hr>
	<div class="row">
		<div class="col-lg-10">
			<div class="form-group">
				<label class="control-label col-sm-5 text-center" for="cover"><h4>Daerah</h4></label>
				<div class="col-sm-7">
					<select name="" id="daerah" class="form-control">
						<option value="bali">bali</option>
						<option value="bali">bali</option>
						<option value="bali">bali</option>
					</select>
				</div>
			</div>
		</div>
		<div class="col-lg-4 konten">
			<div class="isi">
				<img class="img-responsive thumbnail" src="../img/thumb.jpg" alt="thumbnail">
				<div class="spoiler">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam assumenda ratione harum laborum rerum placeat.</div>
			</div>
			<div class="pilihan">
				<button type="button" class="btn btn-default dropdown-toggle">Detail</button>
				<button type="button" class="btn btn-default dropdown-toggle">Donasi</button>
				<p class="text-center">Lorem ipsum dolor sit amet.</p>
			</div>
		</div>
		<div class="col-lg-4 konten">
			<div class="isi">
				<img class="img-responsive" src="../img/thumb.jpg" alt="thumbnail">
				<div class="spoiler">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis voluptatem aut facere odio, nihil ad!</div>
			</div>
			<div class="pilihan">
				<button type="button" class="btn btn-default dropdown-toggle">Detail</button>
				<button type="button" class="btn btn-default dropdown-toggle">Donasi</button>
				<p class="text-center">Lorem ipsum dolor sit amet.</p>
			</div>
		</div>
		<div class="col-lg-4 konten">
			<div class="isi">
				<img class="img-responsive" src="../img/thumb.jpg" alt="thumbnail">
				<div class="spoiler">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Necessitatibus ab ea ipsa voluptatem, vel amet.</div>
			</div>
			<div class="pilihan">
				<button type="button" class="btn btn-default dropdown-toggle">Detail</button>
				<button type="button" class="btn btn-default dropdown-toggle">Donasi</button>
				<p class="text-center">Lorem ipsum dolor sit amet.</p>
			</div>
		</div>

	</div>
</div>
<?php
	include 'footer.view.php';