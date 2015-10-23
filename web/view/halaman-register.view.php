	<div style="margin-top:175px;margin-bottom:175px;">
	<div class="col-md-8 col-md-offset-2">
		<?php echo isset($msg['register']) ? $msg['register'] : '';?>
		<form method="post" enctype="multipart/form-data">
		  <fieldset class="form-group">
			<label for="nama">Nama</label>
			<input type="text" class="form-control" id="nama" name="nama" placeholder="Nama anda...">
			<small class="text-muted"><?php echo isset($error['nama']) ? $error['nama'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="username">Username</label>
			<input type="username" class="form-control" id="username" name="username" placeholder="Username...">
			<small class="text-muted"><?php echo isset($error['username']) ? $error['username'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="password">Password</label>
			<input type="password" class="form-control" id="password" name="password" placeholder="Password...">
			<small class="text-muted"><?php echo isset($error['password']) ? $error['password'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="no_hp">No. HP</label>
			<input type="number" class="form-control" id="no_hp" name="no_hp" placeholder="No. HP anda...">
			<small class="text-muted"><?php echo isset($error['no_hp']) ? $error['no_hp'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="email">E-mail</label>
			<input type="email" class="form-control" id="email" name="email" placeholder="Email anda...">
			<small class="text-muted"><?php echo isset($error['email']) ? $error['email'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="foto">Foto</label><br />
			<img id="image" src="img/qweasdadead.jpg"  width="350px" height="350px" /><br />
			<div class="buttoninput">
				<input onchange="readURL(this);" type="file" name="foto" id="foto" accept="image/*">
			</div>
			<small class="text-muted"><?php echo isset($error['foto']) ? $error['foto'] : '';?></small>
		  </fieldset>
		  <fieldset class="form-group">
			<label for="daerah">Daerah</label>
			<select class="form-control" id="daerah" name="id_daerah">
					<option value="none">-- Daerah --</option>
				<?php foreach($daerah as $data):?>
					<option value="<?=$data['id_daerah']?>"><?=$data['daerah'];?></option>
				<?php endforeach;?>
			</select>
			<small class="text-muted"><?php echo isset($error['id_daerah']) ? $error['id_daerah'] : '';?></small>
		  </fieldset>
		  <button type="submit" class="btn btn-primary" name="register">Register</button>
		</form>
	</div>
	</div>
	<script type="text/javascript" src="view/js/fungsi.js"></script>