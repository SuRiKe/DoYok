<?php
	include 'header.view.php';
?>
<h1>Tambahkan Editor</h1>
<form action="" method="post">
	<div class="input-group">
		<label for="nama">Nama</label>
		<input class="form-control" name="nama" id="nama" autofocus required>
	</div>
	<div class="input-group">
		<label for="email">Email</label>
		<input class="form-control" name="email" id="email" required>
	</div>
</form>
<?php
	include 'footer.view.php';
?>