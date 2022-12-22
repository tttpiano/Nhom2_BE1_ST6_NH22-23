<?php
session_start();
include "header1.php";
include "sidebar.php";
$_SESSION['editUser'] = $_GET['id'];
?>
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
                        <li class="breadcrumb-item active">User Add</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <form action="xulyaddUser.php" method='post' enctype="multipart/form-data">
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
                                <label for="inputName">username</label>
                                <input name="username" type="text" id="inputName" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="inputName">password</label>
                                <input name="password" type="text" id="inputName" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="inputClientCompany">Roles</label>
                                <input name='roles' type="checkbox" id="inputClientCompany" class="form-control">
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
                    <input type="submit" value="Create new Protype" class="btn btn-success float-right">
                </div>
            </div>
        </section>
    </form>
    <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.php" ?>