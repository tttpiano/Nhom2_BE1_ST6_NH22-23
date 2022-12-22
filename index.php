<?php
include "header.php";
?>


<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img style="height: 250px ;" src="images/product01.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Laptop<br>Collection</h3>
						<a href="store.php?loai=1&page=1" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img style="height: 250px ;" src="images/TAI NGHE KHÔNG DÂY NOKIA 411W.jpg" alt="">
					</div>
					<div class="shop-body">
						<h3>Headphone<br>Collection</h3>
						<a href="store.php?loai=4&page=1" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img style="height: 250px ;" src="images/iPhone 14 Pro Max.jpg" alt="">
					</div>
					<div class="shop-body">
						<h3>smart phone<br>Collection</h3>
						<a href="store.php?loai=3&page=1" class="cta-btn">Shop now <i class="fa fa-arrow-circle-right"></i></a>
					</div>
				</div>
			</div>
			<!-- /shop -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">New Products</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<?php foreach ($getOneProtype as $value) : ?>
								<li class="active"><a data-toggle="tab" href="#tab1"><?= $value['tenLoai'] ?></a></li>
							<?php endforeach; ?>
							<?php foreach ($getFourProtype as $value) : ?>
								<li><a data-toggle="tab" href="#tab1"><?= $value['tenLoai'] ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								<!-- product -->
								<?php foreach ($getNewProducts as $value) : ?>
									<div class="product">
										<div class="product-img" style="height: 170px;">
											<img style="height: 170px" src='images/<?php echo $value['hinhSP'] ?>' alt="">
											<div class="product-label">
												<!-- <span class="sale">-30%</span> -->
												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category"><?= $value['tenHang'] ?></p>
											<h3 class="product-name" style="height: 50px;"><a href="products.php? id=<?php echo $value['maSanPham'] ?>"><?= $value['tenSanPham'] ?></a></h3>
											<h4 class="product-price"><?= number_format($value['giaSanPham']) ?> VND
												<!-- <del class="product-old-price">$990.00</del>-->
											</h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist" onclick="addTowishlist(<?php echo $value['maSanPham'] ?>)"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<a href="products.php? id=<?= $value['maSanPham'] ?>">
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</a>

									</div>
								<?php endforeach; ?>
								<!-- /product -->
							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="hot-deal">
					<ul class="hot-deal-countdown">
						<li>
							<div>
								<h3>02</h3>
								<span>Days</span>
							</div>
						</li>
						<li>
							<div>
								<h3>10</h3>
								<span>Hours</span>
							</div>
						</li>
						<li>
							<div>
								<h3>34</h3>
								<span>Mins</span>
							</div>
						</li>
						<li>
							<div>
								<h3>60</h3>
								<span>Secs</span>
							</div>
						</li>
					</ul>
					<h2 class="text-uppercase">hot deal this week</h2>
					<p>New Collection Up to 50% OFF</p>
					<a class="primary-btn cta-btn" href="store.php?page=1">Shop now</a>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">Top selling</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<?php foreach ($getOneProtype as $value) : ?>
								<li class="active"><a data-toggle="tab" href="#tab1"><?= $value['tenLoai'] ?></a></li>
							<?php endforeach; ?>
							<?php foreach ($getFourProtype as $value) : ?>
								<li><a data-toggle="tab" href="#tab1"><?= $value['tenLoai'] ?></a></li>
							<?php endforeach; ?>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab2" class="tab-pane fade in active">
							<div class="products-slick" data-nav="#slick-nav-2">
								<!-- product -->
								<?php foreach ($getTopSellingProducts as $value) : ?>
									<div class="product">
										<div class="product-img" style="height: 170px;">
											<img style="height: 170px; padding: 20px" src="images/<?= $value['hinhSP'] ?>" alt="">
											<div class="product-label">
												<!-- <span class="sale">-30%</span> -->
												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category"><?= $value['tenHang'] ?></p>
											<h3 class="product-name" style="height: 50px;"><a href="products.php? id=<?php echo $value['maSanPham'] ?>"><?= $value['tenSanPham'] ?></a></h3>
											<h4 class="product-price"><?= number_format($value['giaSanPham']) ?> VND
												<!-- <del class="product-old-price">$990.00</del>-->
											</h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist" onclick="addTowishlist(<?php echo $value['maSanPham'] ?>)"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<a href="products.php? id=<?= $value['maSanPham'] ?>">
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											</div>
										</a>
									</div>
									<!-- /product -->
								<?php endforeach; ?>

							</div>
							<div id="slick-nav-2" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- /Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling</h4>
					<div class="section-nav">
						<div id="slick-nav-3" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-3">
					<div>
						<!-- product widget -->
						<?php foreach ($getTopSelling_0_3 as $value) : ?>
							<div class="product-widget">
								<div class="product-img">
									<img src="images/<?= $value['hinhSP'] ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"><?= $value['tenHang'] ?></p>
									<h3 class="product-name"><a href="products.php? id=<?php echo $value['maSanPham'] ?>"><?= $value['tenSanPham'] ?></a></h3>
									<h4 class="product-price"><?= number_format($value['giaSanPham']) ?> VND
										<!-- <del class="product-old-price">$990.00</del> -->
									</h4>
								</div>
							</div>
						<?php endforeach; ?>

					</div>

					<div>
						<!-- product widget -->
						<?php foreach ($getTopSelling_3_6 as $value) : ?>
							<div class="product-widget">
								<div class="product-img">
									<img src="images/<?= $value['hinhSP'] ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"><?= $value['tenHang'] ?></p>
									<h3 class="product-name"><a href="products.php? id=<?php echo $value['maSanPham'] ?>"><?= $value['tenSanPham'] ?></a></h3>
									<h4 class="product-price"><?= number_format($value['giaSanPham']) ?> VND
										<!-- <del class="product-old-price">$990.00</del> -->
									</h4>
								</div>
							</div>
						<?php endforeach; ?>

					</div>
					<div>
						<!-- product widget -->
						<?php foreach ($getTopSelling_6_9 as $value) : ?>
							<div class="product-widget">
								<div class="product-img">
									<img src="images/<?= $value['hinhSP'] ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"><?= $value['tenHang'] ?></p>
									<h3 class="product-name"><a href="products.php? id=<?php echo $value['maSanPham'] ?>"><?= $value['tenSanPham'] ?></a></h3>
									<h4 class="product-price"><?= number_format($value['giaSanPham']) ?> VND
										<!-- <del class="product-old-price">$990.00</del> -->
									</h4>
								</div>
							</div>
						<?php endforeach; ?>

					</div>
				</div>
			</div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling</h4>
					<div class="section-nav">
						<div id="slick-nav-4" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-4">
					<div>
						<!-- product widget -->
						<?php foreach ($getTopSelling_0_3 as $value) : ?>
							<div class="product-widget">
								<div class="product-img">
									<img src="images/<?= $value['hinhSP'] ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"><?= $value['tenHang'] ?></p>
									<h3 class="product-name"><a href="products.php? id=<?php echo $value['maSanPham'] ?>"><?= $value['tenSanPham'] ?></a></h3>
									<h4 class="product-price"><?= number_format($value['giaSanPham']) ?> VND
										<!-- <del class="product-old-price">$990.00</del> -->
									</h4>
								</div>
							</div>
						<?php endforeach; ?>

					</div>

					<div>
						<!-- product widget -->
						<?php foreach ($getTopSelling_3_6 as $value) : ?>
							<div class="product-widget">
								<div class="product-img">
									<img src="images/<?= $value['hinhSP'] ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"><?= $value['tenHang'] ?></p>
									<h3 class="product-name"><a href="products.php? id=<?php echo $value['maSanPham'] ?>"><?= $value['tenSanPham'] ?></a></h3>
									<h4 class="product-price"><?= number_format($value['giaSanPham']) ?> VND
										<!-- <del class="product-old-price">$990.00</del> -->
									</h4>
								</div>
							</div>
						<?php endforeach; ?>

					</div>
					<div>
						<!-- product widget -->
						<?php foreach ($getTopSelling_6_9 as $value) : ?>
							<div class="product-widget">
								<div class="product-img">
									<img src="images/<?= $value['hinhSP'] ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"><?= $value['tenHang'] ?></p>
									<h3 class="product-name"><a href="products.php? id=<?php echo $value['maSanPham'] ?>"><?= $value['tenSanPham'] ?></a></h3>
									<h4 class="product-price"><?= number_format($value['giaSanPham']) ?> VND
										<!-- <del class="product-old-price">$990.00</del> -->
									</h4>
								</div>
							</div>
						<?php endforeach; ?>

					</div>
				</div>
			</div>

			<div class="clearfix visible-sm visible-xs"></div>

			<div class="col-md-4 col-xs-6">
				<div class="section-title">
					<h4 class="title">Top selling</h4>
					<div class="section-nav">
						<div id="slick-nav-5" class="products-slick-nav"></div>
					</div>
				</div>

				<div class="products-widget-slick" data-nav="#slick-nav-5">
					<div>
						<!-- product widget -->
						<?php foreach ($getTopSelling_0_3 as $value) : ?>
							<div class="product-widget">
								<div class="product-img">
									<img src="images/<?= $value['hinhSP'] ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"><?= $value['tenHang'] ?></p>
									<h3 class="product-name"><a href="products.php? id=<?php echo $value['maSanPham'] ?>"><?= $value['tenSanPham'] ?></a></h3>
									<h4 class="product-price"><?= number_format($value['giaSanPham']) ?> VND
										<!-- <del class="product-old-price">$990.00</del> -->
									</h4>
								</div>
							</div>
						<?php endforeach; ?>

					</div>

					<div>
						<!-- product widget -->
						<?php foreach ($getTopSelling_3_6 as $value) : ?>
							<div class="product-widget">
								<div class="product-img">
									<img src="images/<?= $value['hinhSP'] ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"><?= $value['tenHang'] ?></p>
									<h3 class="product-name"><a href="products.php? id=<?php echo $value['maSanPham'] ?>"><?= $value['tenSanPham'] ?></a></h3>
									<h4 class="product-price"><?= number_format($value['giaSanPham']) ?> VND
										<!-- <del class="product-old-price">$990.00</del> -->
									</h4>
								</div>
							</div>
						<?php endforeach; ?>

					</div>
					<div>
						<!-- product widget -->
						<?php foreach ($getTopSelling_6_9 as $value) : ?>
							<div class="product-widget">
								<div class="product-img">
									<img src="images/<?= $value['hinhSP'] ?>" alt="">
								</div>
								<div class="product-body">
									<p class="product-category"><?= $value['tenHang'] ?></p>
									<h3 class="product-name"><a href="products.php? id=<?php echo $value['maSanPham'] ?>"><?= $value['tenSanPham'] ?></a></h3>
									<h4 class="product-price"><?= number_format($value['giaSanPham']) ?> VND
										<!-- <del class="product-old-price">$990.00</del> -->
									</h4>
								</div>
							</div>
						<?php endforeach; ?>

					</div>
				</div>
			</div>

		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<?php include "footer.php" ?>