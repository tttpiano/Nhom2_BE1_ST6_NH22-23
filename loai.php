<?php
include "header.php";
?>


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
								<?php if (isset($_GET['id'])) :
									$id = $_GET['id'];
									$getProductByIdMaLoai = $product->getProductByIdMaLoai($id);
									foreach ($getProductByIdMaLoai as $value) :
										if ($id == $value['maLoaiSP']) : ?>

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
														<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
														<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
														<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
													</div>
												</div>
												<div class="add-to-cart">
													<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
												</div>
											</div>
								<?php endif;
									endforeach;
								endif; ?>

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
<!-- jQuery Plugins -->
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>


</body>

</html>