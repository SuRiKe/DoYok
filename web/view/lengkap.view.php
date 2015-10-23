<div style="margin-top:100px;">
	<h1><center>Sekolah</center></h1>
<div class="clearfix"></div>
<div class="col-md-2 col-md-offset-1">
	<label for="daerah">Daerah</label>
</div>
<div class="col-md-8">
	<select class="form-control" id="daerah" name="id_daerah">
			<option value="none">-- Daerah --</option>
		<?php foreach($daerah as $data):?>
			<option value="<?=$data['id_daerah']?>"><?=$data['daerah'];?></option>
		<?php endforeach;?>
	</select>
</div>
<div class="container">
<div class="row">
	<div class="col-md-4">
		<div class="row">
			<a href="lanjut.php" class="thumbnail">
				<img src="view/img/thumb.jpg">
				<strong class="title">Lorem ipsum dolor sit amet</strong>
				<p>Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, lorem.</p>
			</a>
				<div class="detail-donasi">
					<button onclick="window.location.href='detail.php';" class="btn btn-info">Detail</button>
					<button onclick="window.location.href='donasi.php';" class="btn btn-info">Donasi!</button>
				</div>
		</div>
	</div>
</div>
</div>