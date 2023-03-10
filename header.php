<?php 

ob_start();
session_start();
include 'nedmin/netting/baglan.php';
//ID si 0 olan veriyi çek
$ayarsor=$db->prepare("SELECT * FROM ayar where ayar_id=:id");
$ayarsor->execute(array(
	'id'=>0
));
$ayarcek=$ayarsor->fetch(PDO::FETCH_ASSOC);

//Belirli veriyi seçme işlemi
$menusor=$db->prepare("SELECT * FROM menu where menu_durum=:durum order by menu_sira ASC limit 5");
$menusor->execute(array('durum'=>1));

if (isset($_SESSION['kullanici_mail'])) {
	$kullanicisor=$db->prepare("SELECT * FROM kullanici where kullanici_mail=:mail");
	$kullanicisor->execute(array(
		'mail'=>$_SESSION['kullanici_mail']
	));
	$kullanicicek=$kullanicisor->fetch(PDO::FETCH_ASSOC);
}

$kategoricek=$db->query("SELECT * FROM kategori")->fetchAll(PDO::FETCH_ASSOC);
$ilcek2=$db->query("SELECT * FROM iller")->fetchAll(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="<?php echo $ayarcek["ayar_description"]; ?>">
	<meta name="keywords" content="<?php echo $ayarcek["ayar_keywords"]; ?>">
	<meta name="author" content="<?php echo $ayarcek["ayar_author"]; ?>">
	<title><?php echo $ayarcek["ayar_title"]; ?></title>

	<!-- Fonts -->
	<link href='http://fonts.googleapis.com/css?family=Ubuntu:400,400italic,700' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
	<link href='font-awesome\css\font-awesome.css' rel="stylesheet" type="text/css">
	<!-- Bootstrap -->
	<link href="bootstrap\css\bootstrap.min.css" rel="stylesheet">
	
	<!-- Main Style -->
	<link rel="stylesheet" href="style.css">
	
	<!-- owl Style -->
	<link rel="stylesheet" href="css\owl.carousel.css">
	<link rel="stylesheet" href="css\owl.transitions.css">
	<!-- fancy Style -->
	<link rel="stylesheet" type="text/css" href="js\product\jquery.fancybox.css?v=2.1.5" media="screen">
	

	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    </head>
    <body>
    	<div id="wrapper">
    		<div class="header"><!--Header -->
    			<div class="container">
    				<div class="row">
    					<div class="col-xs-6 col-md-4 main-logo">
    						<a href="index.php"><img width="60" src="<?php echo $ayarcek["ayar_logo"]; ?>" alt="Site logosu" class="logo img-responsive"></a>
    					</div>
    					<div  class="col-md-8">
    						<div class="pushright">
    							<div class="top">
    								<?php if( !isset($_SESSION['kullanici_mail'])){?>
    									<a href="#" id="reg" class="btn btn-default btn-dark">Giriş Yap<span>-- veya --</span>Kayıt Ol</a>
    								<?php } else {?>
    									<a href="#"  class="btn btn-default btn-dark">Hoşgeldin <?php echo $kullanicicek['kullanici_adsoyad']; ?></a>
    								<?php } ?>
    								<div class="regwrap">
    									<div  class="row">
    										<div class="col-md-6 regform">
    											<div class="title-widget-bg">
    												<div class="title-widget">Kullanıcı Girişi</div>
    											</div>
    											<form action="nedmin/netting/islem.php" method="POST" class="signin-form">
    												<div class="form-group">
    													<input type="text" name="kullanici_mail" class="form-control" class="form-control" id="kullanıcı_mail" placeholder="Mail Adresi Giriniz!">
    												</div>
    												<div class="form-group">
    													<input type="password" name="kullanici_password" type="password" class="form-control" id="password" placeholder="Şifre Giriniz!">
    												</div>
    												<div class="form-group">
    													<button name="kullanicigiris" class="btn btn-default btn-red btn-sm">Giriş Yap</button>
    												</div>
    											</form>
    										</div>
    										<div class="col-md-6">
    											<div class="title-widget-bg">
    												<div class="title-widget">Kayıt Ol</div>
    											</div>
    											<p>
    												Yeni kullanıcı? Bir hesap oluşturarak daha hızlı alışveriş yapabilir, bir siparişin durumundan haberdar olabilirsiniz...
    											</p>
    											<a href="register.php"> <button class="btn btn-default btn-yellow">Şimdi Kayıt Ol</button></a>
    										</div>
    									</div>
    								</div>
    								<div class="srch-wrap">
    									<a href="#" id="srch" class="btn btn-default btn-search"><i class="fa fa-search"></i></a>
    								</div>
    								<div class="srchwrap">
    									<div class="row">
    										<div class="col-md-12">
    											<form action="arama" method="POST" class="form-horizontal" role="form">
    												<div class="form-group">
    													<button name="arama" class="btn btn-default">Ara</button>  
    													<div class="col-sm-10">
    														<input type="text" class="form-control" minlength="3" id="search" name="arama">
    													</div>
    												</div>
    											</form>
    										</div>
    									</div>
    								</div>
    							</div>
    						</div>
    					</div>


    				</div>
    			</div>
    			<div class="dashed"></div>
    		</div><!--Header -->
    		<div class="main-nav"><!--end main-nav -->
    			<div class="navbar navbar-default navbar-static-top">
    				<div class="container">
    					<div class="row">
    						<div class="col-md-10">
    							<div class="navbar-header">
    								<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
    									<span class="icon-bar"></span>
    									<span class="icon-bar"></span>
    									<span class="icon-bar"></span>
    								</button>
    							</div>
    							<div class="navbar-collapse collapse">
    								<ul class="nav navbar-nav">
    									<li><a href="index.php" class="active">Ana Sayfa</a><div class="curve"></div></li>

    									<?php while ($menucek=$menusor->fetch(PDO::FETCH_ASSOC)) { ?> 
    										<li>
    											<a href="    											
    											<?php 
    											if (!empty($menucek["menu_url"])) {echo $menucek["menu_url"]; }
    											else{echo "sayfa-".$menucek["menu_seourl"]; }
    											?>
    											">
    											<?php echo $menucek["menu_ad"]; ?></a></li>
    										<?php } ?>


    									</ul>
    								</div>
    							</div>
    							<!-- <div class="col-md-2 machart">
    								<button id="popcart" class="btn btn-default btn-chart btn-sm "><span class="mychart">Cart</span>|<span class="allprice">$0.00</span></button>
    								<div class="popcart">
    									<table class="table table-condensed popcart-inner">
    										<tbody>
    											<tr>
    												<td>
    													<a href="product.htm"><img src="images\dummy-1.png" alt="" class="img-responsive"></a>
    												</td>
    												<td><a href="product.htm">Casio Exilim Zoom</a><br><span>Color: green</span></td>
    												<td>1X</td>
    												<td>$138.80</td>
    												<td><a href=""><i class="fa fa-times-circle fa-2x"></i></a></td>
    											</tr>
    										</tbody>
    									</table>
    									<span class="sub-tot">Sub-Total : <span>$277.60</span> | <span>Vat (17.5%)</span> : $36.00 </span>
    									<br>
    									<div class="btn-popcart">
    										<a href="checkout.htm" class="btn btn-default btn-red btn-sm">Checkout</a>
    										<a href="cart.htm" class="btn btn-default btn-red btn-sm">More</a>
    									</div>
    									<div class="popcart-tot">
    										<p>
    											Total<br>
    											<span>$313.60</span>
    										</p>
    									</div>
    									<div class="clearfix"></div>
    								</div>
    							</div> -->
    							<?php 
    							
    							if (isset($_SESSION['kullanici_mail'])) {
    								$kullanici_id=$kullanicicek['kullanici_id'];
    								$sepetimsor=$db->prepare("SELECT * FROM sepet where kullanici_id=:id");
    								$sepetimsor->execute(array(
    									'id' => $kullanici_id
    								));
    								$say=$sepetimsor->rowCount();
    								?>
    								<ul class="small-menu"><!--small-nav -->
    									<li><a href="hesabim" class="myacc">Hesabım</a></li>
    									<li><a href="siparislerim" class="myacc">Siparişlerim</a></li>
    									<li><a href="sepet" class="myshop">Spetim<sup class="allprice"><?php echo $say; ?></sup></a></li>
    									<li><a href="logout.php" class="mycheck">Çıkış Yap</a></li>
    								</ul><!--small-nav -->
    							<?php } ?>  
    						</div>
    					</div>
    				</div>
	</div><!--end main-nav -->