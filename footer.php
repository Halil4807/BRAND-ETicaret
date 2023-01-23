	
<div class="f-widget"><!--footer Widget-->
	<div class="container">
		<div class="row">
			<div class="col-md-4"><!--footer twitter widget-->
				<div class="title-widget-bg">
					<div class="title-widget">Twitter Updates</div>
				</div>
				<ul class="tweets">
					<li>Check out this great #themeforest item for you
						'Simpler Landing' <a href="#">http://t.co/LbLwldb6 </a>
						<span>2 hours ago</span></li>
						<li class="lastone">Check out this great #themeforest item for you
							'Simpler Landing' <a href="#">http://t.co/LbLwldb6 </a>
							<span>2 hours ago</span></li>
						</ul>
						<div class="clearfix"></div>
						<a href="#" class="btn btn-default btn-follow"><i class="fa fa-twitter fa-2x"></i><div>Follow us on twitter</div></a>
					</div><!--footer twitter widget-->
					<div class="col-md-4"><!--footer newsletter widget-->
						<div class="title-widget-bg">
							<div class="title-widget">Newsletter Signup</div>
						</div>
						<div class="newsletter">
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
							</p>
							<form role="form">
								<div class="form-group">
									<label>Your Email address</label>
									<input type="email" class="form-control newstler-input" id="exampleInputEmail1" placeholder="Enter email">
									<button class="btn btn-default btn-red btn-sm">Sign Up</button>
								</div>
							</form>
						</div>
					</div><!--footer newsletter widget-->
					<div class="col-md-4"><!--footer contact widget-->
						<div class="title-widget-bg">
							<div class="title-widget-cursive">Shopping</div>
						</div>
						<ul class="contact-widget">
							<li class="fphone"><?php echo $ayarcek["ayar_tel"];?> <br><?php echo $ayarcek["ayar_faks"];?></li>
							<li class="fmobile"><?php echo $ayarcek["ayar_gsm"]; ?></li>
							<li class="fmail lastone"><?php echo $ayarcek["ayar_mail"]; ?></li>
						</ul>
					</div><!--footer contact widget-->
				</div>
				<div class="spacer"></div>
			</div>
		</div><!--footer Widget-->
		<div class="footer"><!--footer-->
			<div class="container">
				<div class="row">
					<div class="col-md-9">
						<ul class="footermenu"><!--footer nav-->
							<li><a href="index-1.htm"> </a></li>
							<li><a href="cart.htm"> </a></li>
							<li><a href="checkout.htm"></a></li>
							<li><a href="order.htm"></a></li>
							<li><a href="contact.htm"></a></li>
						</ul><!--footer nav-->
						<div class="f-credit">&copy;<?php echo $ayarcek["ayar_author"] ?> <a href="https://github.com/Halil4807/BRAND-ETicaret">GitHup</a></div>
						<div class="payment visa"></div>
						<div class="payment paypal"></div>
						<div class="payment mc"></div>
						<div class="payment nh"></div>
					</div>
					<div class="col-md-3"><!--footer Share-->
						<div class="followon">Follow us on</div>
						<div class="fsoc">
							<a href="https://<?php echo $ayarcek["ayar_twitter"]; ?>" class="ftwitter">twitter</a>
							<a href="https://<?php echo $ayarcek["ayar_facebook"]; ?>" class="ffacebook">facebook</a>


						<!-- https://icons8.com/icon/17935/google web sitesinden fgoogle
							 https://icons8.com/icon/17949/google websitesinden fgooglehover indirilen png görseller BRAND-ETicaret\images klasörünün içine yüklenir.
							color: FFFFFFD4
							padding: 4
							Square: Color: #B1BAC2 
									Size: %100
									Corner radius: %100
									Filled: ok
									Stroke: no

							style.css
							.fgoogle {background:url(images/fgoogle.png) no-repeat;}
							.fgoogle:hover {background:url(images/fgooglehover.png) no-repeat;}
						-->

						<a href="https://<?php echo $ayarcek["ayar_google"]; ?>" class="fgoogle">Google</a>
						<a href="https://<?php echo $ayarcek["ayar_youtube"]; ?>" class="fyoutube">Youtube</a>
						<div class="clearfix"></div>
					</div>
					<div class="clearfix"></div>
				</div><!--footer Share-->
			</div>
		</div>
	</div><!--footer-->


	<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="bootstrap\js\bootstrap.min.js"></script>
	
	<!-- map -->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script> 
	<script type="text/javascript" src="js\jquery.ui.map.js"></script>
	<script type="text/javascript" src="js\demo.js"></script>
	
	<!-- owl carousel -->
	<script src="js\owl.carousel.min.js"></script>
	
	<!-- rating -->
	<script src="js\rate\jquery.raty.js"></script>
	<script src="js\labs.js" type="text/javascript"></script>
	
	<!-- Add mousewheel plugin (this is optional) -->
	<script type="text/javascript" src="js\product\lib\jquery.mousewheel-3.0.6.pack.js"></script>
	
	<!-- fancybox -->
	<script type="text/javascript" src="js\product\jquery.fancybox.js?v=2.1.5"></script>
	
	<!-- custom js -->
	<script src="js\shop.js"></script>
</div>
</body>
</html>

<?php 
if ($_GET['durum']=="no") {
	$message = "Giriş işlemi başarısız olmuştur.";
	echo "<script type='text/javascript'>alert('$message');</script>"; 
}
elseif ($_GET['durum']=="exit")
{
	$message = "Başarıyla çıkış yaptınız.";
	echo "<script type='text/javascript'>alert('$message');</script>"; 
}
?>