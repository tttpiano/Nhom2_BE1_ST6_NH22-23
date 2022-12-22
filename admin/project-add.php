<?php
include "header1.php";
include "sidebar.php" ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Project Add</h1>
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
  <form action="xulyaddproducts.php" method='post' enctype="multipart/form-data">
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <div class="card-body">

              <div class="form-group">
                <label for="inputName">Tên Sản Phẩm</label>
                <input name="tenSanPham" type="text" id="inputName" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="inputStatus">Hãng</label>
                <select name="hang" id="inputStatus" class="form-control custom-select">
                  <option selected disabled>Chọn hãng</option>
                  <?php foreach ($allmanufacture as $value) : ?>
                    <option value='<?= $value['maHang'] ?>'><?= $value['tenHang'] ?></option>
                  <?php endforeach; ?>

                </select>
              </div>
              <div class="form-group">
                <label for="inputStatus">Loại</label>
                <select name='loai' id="inputStatus" class="form-control custom-select">
                  <option selected disabled>chọn loại</option>
                  <?php foreach ($allprotype as $value) : ?>
                    <option value='<?= $value['maLoai'] ?>'><?= $value['tenLoai'] ?></option>
                  <?php endforeach; ?>

                </select>
              </div>
              <div class="form-group">
                <label for="inputName">Giá</label>
                <input name='gia' type="text" id="inputName" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="inputName">Hình</label>
                <input name='hinh' type="file" id="inputName" class="form-control" required>
              </div>
              <div class="form-group">
                <label for="inputDescription">Mô Tả</label>
                <textarea name='mota' id="inputDescription" class="form-control" rows="4"></textarea>
              </div>

              <div class="form-group">
                <label for="inputClientCompany">Sản phẩm nỗi bật</label>
                <input name='spnoibat' type="checkbox" id="inputClientCompany" class="form-control">
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
          <input type="submit" value="Create new Porject" class="btn btn-success float-right">
        </div>
      </div>
    </section>
  </form>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.php" ?>