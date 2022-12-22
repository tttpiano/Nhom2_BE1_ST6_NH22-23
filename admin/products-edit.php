<?php
session_start();
include "header1.php";
include "sidebar.php";
$_SESSION['editProduct'] = $_GET['id']; 
$p = $product->getProductById($_GET['id']);
?>

<!-- Content Wrapper. Contains page content -->

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Edit Product</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Project Add</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <form action="xulyeditProduct.php" method='post' enctype="multipart/form-data">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header" style="background: #28a745 !important;">
              <h3 class="card-title">Edit</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">

              <div class="form-group">
                <label for="inputName">Tên Sản Phẩm</label>
                <input value ="<?= $p[0]['tenSanPham'] ?>" name="tenSanPham" type="text" id="inputName" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="inputStatus">Hãng</label>
                <select name="hang" id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Chọn hãng</option>
                  <?php foreach ($allmanufacture as $value) : 
                      if($value['maHang']==$p[0]['maHangSX']):
                    ?>
                    <option selected value='<?= $value['maHang'] ?>'><?= $value['tenHang'] ?></option>
                    <?php else: ?>
                    <option value='<?= $value['maHang'] ?>'><?= $value['tenHang'] ?></option>
                  <?php endif; endforeach; ?>

                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Loại</label>
                <select name='loai' id="inputStatus" class="form-control custom-select">
                  <option selected disabled>chọn loại</option>
                  <?php foreach ($allprotype as $value) : 
                    if($value['maLoai']==$p[0]['maLoaiSP']):
                    ?><option selected value='<?= $value['maLoai'] ?>'><?= $value['tenLoai'] ?></option>
                     <?php else: ?>
                    <option value='<?= $value['maLoai'] ?>'><?= $value['tenLoai'] ?></option>
                  <?php endif; endforeach; ?>

                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Giá</label>
                <input value ="<?= number_format($p[0]['giaSanPham']) ?>" name='gia' type="text" id="inputName" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="inputName">Hình</label>
                <input name='hinh' type="file" id="inputName" class="form-control" required>
                <img style="width: 250px;" src="../images/<?= $p[0]['hinhSP'] ?>" alt="">
              </div>
              <div class="form-group">
                <label for="inputDescription">Mô Tả</label>
                <textarea name='mota' id="inputDescription" class="form-control" rows="4">
                <?= $p[0]['moTaSP'] ?>
                </textarea>
              </div>

              <div class="form-group">
                <label for="inputClientCompany">Sản phẩm nỗi bật</label>
                <?php if($p[0]['sPNoiBat'] == 1 ):?>
                <input checked name='spnoibat' type="checkbox" id="inputClientCompany" class="form-control">
                <?php else: ?>
                  <input name='spnoibat' type="checkbox" id="inputClientCompany" class="form-control">
                <?php endif; ?>                  
              </div>

            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>

      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Save Changes" class="btn btn-success float-right">
        </div>
      </div>
    </section>
  </form>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.php" ?>