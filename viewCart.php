<?php
include "header.php";
?>
<div class="container-f">
    <div class="row">
        <div class="col-md-6" style="text-align: center;padding: 20px 0; background: #1e1f29;">
            <h7 style="font-size: 25px; font-weight: bold; color: #fff;">Tổng Sản Phẩm: <?= $totalCart ?> <i class="fa-solid fa-box-open"></i></h7>
        </div>
        <div class="col-md-6" style="text-align: center;padding: 20px 0; background: #D10024;">
            <h7 style="font-size: 25px; font-weight: bold; color: #fff;">Tổng Tiền: <?= number_format($totalPrice) ?> <i class="fa-solid fa-dong-sign"></i></h7>
        </div>
    </div>
</div>

<div class="container" style="margin-top: 40px;">
    <table id="cart" class="table table-hover table-condensed">
        <thead>
            <tr>
                <th style="width:50%">Sản phẩm</th>
                <th style="width:12%">Giá</th>
                <th style="width:8%">Số lượng</th>
                <th style="width:22%" class="text-center">Thành tiền</th>
                <th style="width:10%"> </th>
            </tr>
        </thead>
        <tbody>
            <?php if (isset($_SESSION['cart'])) :
                foreach ($_SESSION['cart'] as $key => $value) :
                    $cart = $product->getProductById2($key);
            ?>
                    <tr>
                        <td data-th="Product">
                            <div class="row">
                                <div class="col-sm-3 hidden-xs"><img src="./images/<?= $cart["hinhSP"] ?>" alt="" width="120px" height="100px">
                                </div>
                                <div class="col-sm-19">
                                    <h4 style=" margin-top: 35px;" class="nomargin"><?= $cart['tenSanPham'] ?></h4>

                                </div>
                            </div>
                        </td>
                        <td data-th="Price">
                            <div style=" margin-top: 35px;">
                                <?= number_format($cart['giaSanPham']) ?> VND
                            </div>
                        </td>
                        <td>
                            <div style="text-align: center; margin-top: 35px;">
                                X<?= $value ?>
                            </div>
                        </td>
                        <td data-th="Subtotal" class="text-center">
                            <div style="text-align: center; margin-top: 35px;">
                                <?= number_format($Price1 = $value * $cart['giaSanPham']) ?> VND
                            </div>
                        </td>
                        <td class="actions" data-th="">
                            <button style="margin-top: 35px;" class="btn btn-info btn-sm"><i class="fa fa-edit"></i>
                            </button>
                            <a href="delete.php?id=<?= $key ?>">
                                <button style="margin-top: 35px;" class="btn btn-danger btn-sm"><i class="fa fa-trash-o"></i>
                                </button>
                            </a>
                        </td>
                    </tr>
            <?php endforeach;
            endif; ?>

        </tbody>
        <tfoot>
            <tr class="visible-xs">
                <td class="text-center"><strong>Tổng 200.000 đ</strong>
                </td>
            </tr>
            <tr>
                <td><a href="store.php?loai=&page=1" class="btn btn-warning"><i class="fa fa-angle-left"></i> Tiếp tục mua hàng</a>
                </td>
                <td colspan="2" class="hidden-xs"> </td>
                <td class="hidden-xs text-center"><strong></strong>
                </td>
                <td><a href="checkout.php" class="btn btn-success btn-block">Thanh toán <i class="fa fa-angle-right"></i></a>
                </td>
            </tr>
        </tfoot>
    </table>
</div>
<?php include "footer.php" ?>

<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- Products tab & slick -->
            <div class="col-md-12">
                <div class="row">
                    <div class="products-tabs">
                        <!-- tab -->
                        <div id="tab1" class="tab-pane active">
                            <div class="products-slick" data-nav="#slick-nav-1">
                                <!-- product -->

                                <?php if (isset($_SESSION['cart'])) :

                                    foreach ($_SESSION['cart'] as $key => $value) :
                                        $getProductById2 = $product->getProductById2($key); ?>

                                        <div class="product">
                                            <div class="product-img" style="height: 170px;">
                                                <img style="height: 170px" src='images/<?php echo $getProductById2['hinhSP'] ?>' alt="">
                                                <div class="product-label">
                                                    <!-- <span class="sale">-30%</span> -->
                                                    <a href="delete.php?id=<?= $key ?>">
                                                        <button class="delete" style="background: black; color: white; border-radius: 7px;"><i class="fa fa-close"></i></button>
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="product-body">
                                                <p class="product-category"><?= $getProductById2['tenHang'] ?></p>
                                                <h3 class="product-name" style="height: 50px;"><a href="products.php? id=<?php echo $getProductById2['maSanPham'] ?>"> <?= $getProductById2["tenSanPham"] ?></a></h3>
                                                <h4 class="product-price">
                                                    <span class="qty">X<?= $value ?></span> : <?= number_format($getProductById2['giaSanPham']) ?> VND

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
                                            <a href="products.php? id=<?= $getProductById2['maSanPham'] ?>">
                                                <div class="add-to-cart">
                                                    <button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
                                                </div>
                                            </a>
                                        </div>
                                        <?php $totalPrice += $value * $getProductById2['giaSanPham'] ?>
                                <?php endforeach;
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