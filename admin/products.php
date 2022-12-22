<?php
include "./header1.php";
include "./sidebar.php";
?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Tất Cả sản phẩm</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">DataTables</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <div style="    display: flex; justify-content: end; margin-right: 52px; margin-bottom: 20px;">
            <a class="btn btn-primary btn-sm" href="./project-add.php">
              <i class="fa-solid fa-plus"></i>
              ADD
            </a>
          </div>
          <div class="card">

            <!-- /.card-header -->
            <div class="card-body">
              <table id="example2" class="table table-bordered table-hover">
                <thead>

                  <tr>
                    <th>Tên sản phẩm</th>
                    <th>Hình Sản phẩm</th>
                    <th>Hãng Sản Xuất</th>
                    <th>Giá Sản Phẩm</th>
                    <th>Mô tả</th>
                    <th></th>
                  </tr>
                </thead>
                <tbody>
                  <?php foreach ($allProducts as $value) : ?>
                    <tr>
                      <td style="width: 300px;">
                        <a>
                          <?= $value['tenSanPham'] ?>
                        </a>
                      </td>
                      <td>
                        <div style="text-align: center;">
                          <img alt="Avatar" class="table-avatar" style="width: 100px;height: 75px;" src="../images/<?= $value['hinhSP'] ?>">
                        </div>
                      </td>
                      <td class="project_progress">
                        <!-- <div class="progress progress-sm">
                        </div>
                        <small>
                          57% Complete
                        </small> -->
                        <div style="text-align: center; margin-top: 20px;">
                          <?= $value['tenHang'] ?>
                        </div>
                      </td>
                      <td class="project-state">
                        <div style="text-align: center; margin-top: 20px;">
                          <?= number_format($value['giaSanPham']) ?> VND
                        </div>
                        <!-- <span class="badge badge-success">Success</span> -->
                      </td>
                      <td class="project-actions text-right" style="width: 300px;">
                        <div style="text-align: center; margin-top: 20px;">
                          <?= substr($value['moTaSP'], 0, 100) ?>
                        </div>
                        <!-- <span class="badge badge-success">Success</span> -->
                      </td>

                      <td class="project-actions text-right">

                        <a class="btn btn-info btn-sm" href="products-edit?id=<?= $value['maSanPham'] ?>">
                          <i class="fas fa-pencil-alt">
                          </i>
                          Edit
                        </a>
                        <a class="btn btn-danger btn-sm" href="deleteProduct.php?maSP=<?= $value['maSanPham'] ?>">
                          <i class="fas fa-trash">
                          </i>
                          Delete
                        </a>
                      </td>

                    </tr>
                  <?php endforeach; ?>

                </tbody>

              </table>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->


          <!-- /.card -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<footer class="main-footer">
  <div class="float-right d-none d-sm-block">
    <b>Version</b> 3.1.0
  </div>
  <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
</footer>

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
  <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
  $(function() {
    $("#example1").DataTable({
      "responsive": true,
      "lengthChange": false,
      "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>

</html>