<?php
session_start();
require "config.php";
require "models/db.php";
require "models/protype.php";
require "models/product.php";
require "models/manufacture.php";

$protype = new Protype;
$product = new Product;
$manufacture = new manufacture;

// ----------product----------
$getAllProducts = $product->getAllProducts();
$getNewProducts = $product->getNewProducts();
$getTopSellingProducts = $product->getTopSellingProducts();
$getTopSelling_3_6 = $product->getTopSelling_3_6();
$getTopSelling_0_3 = $product->getTopSelling_0_3();
$getTopSelling_6_9 = $product->getTopSelling_6_9();
//--------manufacture----------
$getAllManufacture = $manufacture->getAllManufacture();

//-----------protype--------
$getAllProtype = $protype->getAllProtype();
$getOneProtype =  $protype->getOneProtype();
$getFourProtype =  $protype->getFourProtype();

$totalCart = 0;
if (isset($_SESSION['cart'])) :
	foreach ($_SESSION['cart'] as $key => $value) {
		$totalCart += $value;
	}
endif;
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro - HTML Ecommerce Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
					<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
				</ul>
				<ul class="header-links pull-right">
					<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
					<li><a href="#"><i class="fa fa-user-o"></i> My Account</a></li>
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="#" class="logo">
								<img src="./img/logo.png" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form action="store.php" method="get">
								<select class="input-select">
									<option value="0">All Categories</option>
									<option value="1">Category 01</option>
									<option value="1">Category 02</option>
								</select>
								<input class="input" name="keyword" placeholder="Search here">
								<button type="Submit" class="search-btn">Search</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<!-- Wishlist -->
							<div>
								<a href="#">
									<i class="fa fa-heart-o"></i>
									<span>Your Wishlist</span>
									<div class="qty">2</div>
								</a>
							</div>
							<!-- /Wishlist -->

							<!-- Cart -->

							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Your Cart</span>

									<div class="qty"><?= $totalCart ?></div>
								</a>

								<div class="cart-dropdown">
									<div class="cart-list">
										<?php if (isset($_SESSION['cart'])) :
											$totalPrice = 0;
											foreach ($_SESSION['cart'] as $key => $value) :
												$abc = $product->getProductById2($key);
										?>
												<div class="product-widget">
													<div class="product-img">
														<img src="./images/<?= $abc['hinhSP'] ?>" alt="">
													</div>
													<div class="product-body">
														<h3 class="product-name"><a href="#"><?= $abc['tenSanPham'] ?></a></h3>
														<h4 class="product-price"><span class="qty">X<?= $value ?></span><?= number_format($abc['giaSanPham']) ?>VND</h4>
													</div>
													<a href="delete.php?id=<?= $key ?>">
														<button class="delete"><i class="fa fa-close"></i></button>
													</a>

												</div>
												<?php $totalPrice += $value * $abc['giaSanPham'] ?>
										<?php endforeach;
										endif; ?>
									</div>
									<div class="cart-summary">
										<small><?= $totalCart ?> is selected</small>
										<h5>SUBTOTAL: <?= number_format($totalPrice)  ?>VND</h5>
									</div>
									<div class="cart-btns">
										<a href="#">View Cart</a>
										<a href="checkout.php">Checkout <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>

							</div>

							<!-- /Cart -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->

				<ul class="main-nav nav navbar-nav">
					<li class="active"><a href="index.php">Home</a></li>
					<?php foreach ($getAllProtype as $value) : ?>
						<li><a href="loai.php? id=<?php echo $value['maLoai'] ?>"><?= $value['tenLoai'] ?></a></li>
					<?php endforeach; ?>
				</ul>

				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->