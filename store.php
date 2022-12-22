<?php
include "header.php";
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$countPages = 3;
?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb-tree">
					<li><a href="#">Home</a></li>
					<li><a href="#">All Categories</a></li>
					<li><a href="#">Accessories</a></li>
					<li class="active">Headphones (227,490 Results)</li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- ASIDE -->
			<div id="aside" class="col-md-3">
				<!-- aside Widget -->
				<!-- <div class="aside">
					<h3 class="aside-title">Categories</h3>
					<div class="checkbox-filter">
						<?php foreach ($getAllProtype as $value) : ?>
							<div class="input-checkbox">
								<input type="checkbox" onclick="load_ajax(-1,'null',<?= $value['maLoai'] ?>,'<?= $value['tenLoai'] ?>')" id="category-<?= $value['maLoai'] ?>">
								<label for="category-<?= $value['maLoai'] ?>">
									<span></span>
									<?= $value['tenLoai'] ?>
									<small>(<?= rand(120, 300); ?>)</small>
								</label>
							</div>
						<?php endforeach; ?>
					</div>
				</div> -->
				<!-- /aside Widget -->

				<!-- aside Widget -->
				<!-- <div class="aside">
					<h3 class="aside-title">Price</h3>
					<div class="price-filter">
						<div id="price-slider"></div>
						<div class="input-number price-min">
							<input id="price-min" type="number">
							<span class="qty-up">+</span>
							<span class="qty-down">-</span>
						</div>
						<span>-</span>
						<div class="input-number price-max">
							<input id="price-max" type="number">
							<span class="qty-up">+</span>
							<span class="qty-down">-</span>
						</div>
					</div>
				</div> -->
				<!-- /aside Widget -->

				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Brand</h3>
					<div class="checkbox-filter">
						<?php foreach ($getAllManufacture as $value) : ?>
							<div class="input-checkbox">
								<input type="checkbox" onclick="load_ajax(<?= $value['maHang'] ?>,'<?= $value['tenHang'] ?>')" id="brand-<?= $value['maHang'] ?>">
								<label for="brand-<?= $value['maHang'] ?>">
									<span></span>
									<?= $value['tenHang'] ?>
									<small>(<?= rand(130, 190) ?>)</small>
								</label>
							</div>
						<?php endforeach; ?>

					</div>
				</div>
				<!-- /aside Widget -->

				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Top selling</h3>
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
				<!-- /aside Widget -->
			</div>
			<!-- /ASIDE -->

			<!-- STORE -->
			<div id="store" class="col-md-9">
				<!-- store top filter -->
				<div class="store-filter clearfix">
					<div class="store-sort">
						<label>
							Sort By:
							<select class="input-select">
								<option value="0">Popular</option>
								<option value="1">Position</option>
							</select>
						</label>

						<label>
							Show:
							<select class="input-select">
								<option value="0">20</option>
								<option value="1">50</option>
							</select>
						</label>
					</div>
					<ul class="store-grid">
						<li class="active"><i class="fa fa-th"></i></li>
						<li><a href="#"><i class="fa fa-th-list"></i></a></li>
					</ul>
				</div>
				<!-- /store top filter -->

				<!-- store products -->
				<div class="row">
					<!-- product -->

					<?php
					if (isset($_GET['keyword'])) :
						$keyWord = $_GET['keyword'];
						$search = $product->search($keyWord);
						foreach ($search as $value) :


					?>
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img" style="height: 200px;">
										<img style="height: 200px; padding: 20px;" src='images/<?php echo $value['hinhSP'] ?>' alt="">
										<div class="product-label">
											<!-- <span class="sale">-30%</span> -->
											<span class="new">NEW</span>
										</div>
									</div>
									<div class="product-body">
										<p class="product-category"><?= $value['tenHang'] ?></p>
										<h3 class="product-name" style="height: 50px !important;"><a href="products.php? id=<?php echo $value['maSanPham'] ?>"><?= $value['tenSanPham'] ?></a></h3>
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
							</div>
					<?php endforeach;
					endif; ?>
					<!-- /product -->
					<?php
					if (isset($_GET['loai'])) :
						$loai = $_GET['loai'];
						$a = $product->getProductByIdMaLoai($loai, $page * $countPages - $countPages, $countPages);
						if (empty($loai)) {
							$row1 = count($product->getAllProducts());
						} else {
							$row1 = $product->totalProductByLoai($loai);
						}

						$totalLoai = ceil($row1 / $countPages) + 1;

						foreach ($a as $vaLoai) :
					?>
							<tr>
								<div class="col-md-4 col-xs-6">
									<div class="product">
										<div class="product-img" style="height: 200px;">
											<td><img style="height: 200px; padding: 20px" src="./images/<?= $vaLoai['hinhSP'] ?>" width="100px"></td>
											<div class="product-label">
												<span class="new">NEW</span>
											</div>
										</div>
										<div class="product-body">
											<p class="product-category"><?php echo $vaLoai["tenHang"] ?></p>
											<h3 class="product-name" style="height: 50px !important;"><a href="products.php? id=<?php echo $vaLoai['maSanPham'] ?>"><?= $vaLoai['tenSanPham'] ?></a></h3>
											<h4 class="product-price"><?php echo number_format($vaLoai["giaSanPham"]) ?></h4>
											<div class="product-rating">
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
												<i class="fa fa-star"></i>
											</div>
											<div class="product-btns">
												<button class="add-to-wishlist" onclick="addTowishlist(<?php echo $vaLoai['maSanPham'] ?>)"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
												<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
												<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
											</div>
										</div>
										<div class="add-to-cart">
											<button class="add-to-cart-btn"><a href="products.php?id=<?php echo $vaLoai["maSanPham"]; ?>"><i class="fa fa-shopping-cart"></i>add to cart</a></button>
										</div>
									</div>

								</div>
							</tr>

						<?php endforeach; ?>
						<!-- store bottom filter -->


				</div>

				<!-- /store products -->
				<div class="store-filter clearfix">
					<span class="store-qty">Showing 20-100 products</span>
					<ul class="store-pagination">
						<?php for ($i = 1; $i < $totalLoai; $i++) { ?>
							<li id="pages-<?= $i ?>"><a onclick="switchPages(<?= $i ?>,<?= $loai ?>)"><?= $i ?></a></li>
						<?php } ?>

					</ul>
				</div>
				<!-- /store bottom filter -->
			<?php endif; ?>
			<?php
			if (isset($_SESSION['wishlist'])) :
				foreach ($_SESSION['wishlist'] as $key1 => $value1) :
					$wishlist = $product->getProductById2($key1);
			?>
					<tr>
						<div class="col-md-4 col-xs-6">
							<div class="product">
								<div class="product-img" style="height: 200px;">
									<td><img style="height: 200px; padding: 20px" src="./images/<?= $wishlist['hinhSP'] ?>" width="100px"></td>
									<div class="product-label">
										<span class="new">NEW</span>
									</div>
								</div>
								<div class="product-body">
									<p class="product-category"><?php echo $wishlist["tenHang"] ?></p>
									<h3 class="product-name" style="height: 50px !important;"><a href="products.php? id=<?php echo $wishlist['maSanPham'] ?>"><?= $wishlist['tenSanPham'] ?></a></h3>
									<h4 class="product-price"><?php echo number_format($wishlist["giaSanPham"]) ?>VND</h4>
									<div class="product-rating">
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
										<i class="fa fa-star"></i>
									</div>
									<div class="product-btns">
										<a href="deletewishlist.php?id=<?= $wishlist['maSanPham'] ?>">
											<i class="fa fa-heart-o" style="color: red;"></i><span class="tooltipp"></span></a>
										<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
										<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
									</div>
								</div>
								<div class="add-to-cart">
									<button class="add-to-cart-btn"><a href="products.php?id=<?php echo $wishlist["maSanPham"]; ?>"><i class="fa fa-shopping-cart"></i>add to cart</a></button>
								</div>
							</div>

						</div>
					</tr>

			<?php endforeach;
			endif; ?>


			</div>
			<!-- /STORE -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- NEWSLETTER -->
<div id="newsletter" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="newsletter">
					<p>Sign Up for the <strong>NEWSLETTER</strong></p>
					<form>
						<input class="input" type="email" placeholder="Enter Your Email">
						<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
					</form>
					<ul class="newsletter-follow">
						<li>
							<a href="#"><i class="fa fa-facebook"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-twitter"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-instagram"></i></a>
						</li>
						<li>
							<a href="#"><i class="fa fa-pinterest"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /NEWSLETTER -->

<!-- FOOTER -->
<footer id="footer">
	<!-- top footer -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">About Us</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut.</p>
						<ul class="footer-links">
							<li><a href="#"><i class="fa fa-map-marker"></i>1734 Stonecoal Road</a></li>
							<li><a href="#"><i class="fa fa-phone"></i>+021-95-51-84</a></li>
							<li><a href="#"><i class="fa fa-envelope-o"></i>email@email.com</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Categories</h3>
						<ul class="footer-links">
							<li><a href="#">Hot deals</a></li>
							<li><a href="#">Laptops</a></li>
							<li><a href="#">Smartphones</a></li>
							<li><a href="#">Cameras</a></li>
							<li><a href="#">Accessories</a></li>
						</ul>
					</div>
				</div>

				<div class="clearfix visible-xs"></div>

				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Information</h3>
						<ul class="footer-links">
							<li><a href="#">About Us</a></li>
							<li><a href="#">Contact Us</a></li>
							<li><a href="#">Privacy Policy</a></li>
							<li><a href="#">Orders and Returns</a></li>
							<li><a href="#">Terms & Conditions</a></li>
						</ul>
					</div>
				</div>

				<div class="col-md-3 col-xs-6">
					<div class="footer">
						<h3 class="footer-title">Service</h3>
						<ul class="footer-links">
							<li><a href="#">My Account</a></li>
							<li><a href="#">View Cart</a></li>
							<li><a href="#">Wishlist</a></li>
							<li><a href="#">Track My Order</a></li>
							<li><a href="#">Help</a></li>
						</ul>
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /top footer -->

	<!-- bottom footer -->
	<div id="bottom-footer" class="section">
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-12 text-center">
					<ul class="footer-payments">
						<li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
						<li><a href="#"><i class="fa fa-credit-card"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
						<li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
					</ul>
					<span class="copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
						Copyright &copy;<script>
							document.write(new Date().getFullYear());
						</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</span>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</div>
	<!-- /bottom footer -->
</footer>
<!-- /FOOTER -->

<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>
<script>
	function addTowishlist(id) {
		window.location.href = 'addwishlist.php?id=' + id;
	}

	function load_ajax(id, brand) {

		//----------------- brands ------------------

		let brands = localStorage.getItem('brands') != null ? JSON.parse(localStorage.getItem('brands')) : [];


		var check = document.getElementById('brand-' + id);
		if (check.checked) {
			brands.push(brand);
			localStorage.setItem('brands', JSON.stringify(brands));
		} else {
			const index = brands.indexOf(brand);
			if (index > -1) { // only splice array when item is found
				brands.splice(index, 1); // 2nd parameter means remove one item only
			}

			localStorage.setItem('brands', JSON.stringify(brands));
		}
		var sanPham = document.querySelector('#store .row');


		$.ajax({
			url: "ajax.php",
			type: "post",
			dataType: "json",
			data: {
				brands: brands,

			},
			success: function(result) {


				var htmls = result.map((element) => {
					return `
						<div class="col-md-4 col-xs-6">
							<div class="product">
								<div class="product-img" style="height: 200px;">
									<img style="height: 200px; padding: 20px" src='images/${element.hinhSP}' alt="">
									<div class="product-label">
										<!-- <span class="sale">-30%</span> -->
										<span class="new">NEW</span>
									</div>
								</div>
								<div class="product-body">
									<p class="product-category">${element.tenHang}</p>
									<h3 class="product-name" style="height: 50px;"><a href="products.php? id=${element.maSanPham}">${element.tenSanPham}</a></h3>
									<h4 class="product-price">
									${element.giaSanPham.toLocaleString('vn-VN', {style: 'currency',currency: 'VND',})} VND
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
										<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
										<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
										<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
									</div>
								</div>
								<a href="products.php? id=${element.maSanPham}">
									<div class="add-to-cart">
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
									</div>
								</a>
							</div>
						</div>`
				})
				sanPham.innerHTML = htmls.join('');

			},
			error: function(e) {
				sanPham.innerHTML = ''
			}


		})
	}

	function switchPages(numberPage, loai) {
		if (loai == undefined) {
			loai = '';
		}
		window.location.href = 'store.php?loai=' + loai + "&page=" + numberPage;

	}
	var a = document.getElementById("pages-" + <?= $page ?>);
	a.classList.add('active');
</script>

</body>

</html>