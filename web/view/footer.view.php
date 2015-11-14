
<div class="clearfix"></div>
<div id="footer" class="footer-bawah">
	<div class="credit container">
		<div class="col-lg-6">
			<center>
			<h3>Partner <span class="kata-kedua">Kami</span></h3>
			<hr class="hr-putih">
			<div class="col-md-4 col-sm-6 col-xs-12"><img src="img/logo1.jpg" alt="" class="img-responsive"></div>
			<div class="col-md-4 col-sm-6 col-xs-12"><img src="img/logo1.jpg" alt="" class="img-responsive"></div>
			<div class="col-md-4 col-sm-12 col-xs-12"><img src="img/logo1.jpg" alt="" class="img-responsive"></div>
			</center>
		</div>
		<div class="col-lg-offset-2 col-lg-4 partner">
			<center>
			<h3>Kontak <span class="kata-kedua">Kami</span></h3>
			</center>
			<hr class="hr-putih">
			<div class="social-media">
				<center>
					<a href="https://facebook.com"><i class="fa fa-facebook-square"></i></a>
					<a href="https://twitter.com"><i class="fa fa-twitter-square"></i></a>
					<a href="https://google.com"><i class="fa fa-google-plus-square"></i></a>
				</center>
			</div>
		</div>
	</div>
	<div class="col-lg-12 hak-cipta text-center">
		Copyright 2015 Made with <span style="color:red;" class="glyphicon glyphicon-heart"></span> in Denpasar
	</div>
</div>
<!-- Container -->
    <script src="view/js/fungsi.js"></script>
    <script src="view/js/jquery.formatCurrency-1.4.0.js"></script>
    <script src="view/js/bootstrap.min.js"></script>
    <script>
    	function checkRetype(){
    		var pas = $("#password").val();
    		var kfr = $("#konfirm-password").val();
    		if (pas != kfr)
    			$("#retype").html("Password Tidak Benar");
    		else
    			$("#retype").html("");
    	}
    </script>
    <script type='text/javascript'>
		//<![CDATA[
		$(document).ready(function(){
			$("#logo").mouseenter(function(){
				$(this).attr("src", "img/doyok-malam.png");
			}).mouseleave(function(){
				$(this).attr("src", "img/doyok-pagi.png");
			});//]]> 
			$("#logo1").mouseenter(function(){
				$(this).attr("src", "img/doyok-malam.png");
			}).mouseleave(function(){
				$(this).attr("src", "img/doyok-pagi.png");
			});//]]> 
		});
  </script>
  </body>
</html>