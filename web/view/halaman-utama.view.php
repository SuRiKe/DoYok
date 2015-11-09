<div class="jumbotron judul-utama">
	<div class="judul-utama-kata">
		<center>
		<img id="logo" src="img/doyok-pagi.png" width="30%" height="30%">
		<p><font size="5"><strong>( Donasi Yok! )</strong></font></p>
		</center>
	</div>
</div>
<div class="clearfix"></div>
<div class="container" id="data-rumah">
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-6">
				<div class="row thumb">
					<a href="?hal=detail&rumah='k001'" class="thumbnail">
						<img src="img/rumah_kmiskin/Arti Mimpi Rumah Ambruk Roboh.jpg" width="300px" style="max-height:300px;">
						<strong class="title"><center>Rumah cang ne Cuk</center></strong>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Numquam repellendus pariatur exercitationem dolor. Pariatur repellendus, perspiciatis assumenda nam beatae! Id.</p>
						<h5>Jl. Gatot Subroto, Denpasar</h5>
						<div class="progress">
							<div class="progress-bar progress-bar-info progress-bar-striped" role="progressbar" aria-valuenow="80%" aria-valuemin="0" aria-valuemax="100" style="width:80%;"> </div>	
						</div>
						<div class="bawah-progress">
							<div class="col-md-12">
								<div class="col-md-4"><h6>89% </h6><label>Terkumpul</label></div>
								<div class="col-md-5"><h6>Rp. 5.000.000,- </h6><label>Diperlukan</label></div>
								<div class="col-md-3"><h6>69 </h6><label>Orang</label></div>
							</div>
						</div>
					</a>

				<?php if (!$_SESSION['login_client']): ?>
					<a class="detail-donasi" href="?hal=login"><button class="btn btn-info" onclick="">Donasi!</button></a>
				<?php else: ?>
					<a class="detail-donasi" href="?hal=donasi&rumah=<?=$kms['id_kms']?>"><button class="btn btn-info" onclick="">Donasi!</button></a>
				<?php endif; ?>
				</div>
			</div>
		</div>
</div>
<center>
	<nav style="margin-top:25px;">
	  <ul class="pagination">
	    <li>
	      <a href="#" aria-label="Previous">
	        <span aria-hidden="true">&laquo;</span>
	      </a>
	    </li>
	    <li><a href="#">1</a></li>
	    <li><a href="#">2</a></li>
	    <li><a href="#">3</a></li>
	    <li><a href="#">4</a></li>
	    <li><a href="#">5</a></li>
	    <li>
	      <a href="#" aria-label="Next">
	        <span aria-hidden="true">&raquo;</span>
	      </a>
	    </li>
	  </ul>
	</nav>
</center>
<div style="margin-bottom:100px;"></div>