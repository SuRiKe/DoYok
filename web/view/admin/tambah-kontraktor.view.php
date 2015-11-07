<?php
	include 'header.view.php';
?>
<h1>Tambahkan Kontraktor</h1>
<form action="" method="post">
	<div class="col-md-5">
		<label for="nama">Nama</label>
		<input class="form-control" name="nama" id="nama" autofocus required>
		<label for="email">Email</label>
		<input class="form-control" name="email" id="email" required>
	</div>
	<div class="col-md-5">
		<label for="nama">Nama</label>
		<input class="form-control" name="nama" id="nama" autofocus required>
		<label for="email">Email</label>
		<input class="form-control" name="email" id="email" required>
	</div>
	<div class="col-md-10">
		<br>
		<textarea class="form-control" rows="10"></textarea>
		<br>
		<input class="form-control btn btn-primary" type="submit">
	</div>
</form>
<?php
	include 'footer.view.php';
?>