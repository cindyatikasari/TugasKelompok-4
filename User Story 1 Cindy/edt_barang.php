<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>2POS Admin</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
  <!-- AdminLTE Skins. We have chosen the skin-blue for this starter
        page. However, you can choose any other skin. Make sure you
        apply the skin class to the body tag so the changes take effect.
  -->
  <link rel="stylesheet" href="dist/css/skins/skin-purple.min.css">
<!-- font awesome here-->

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
</head>

<body class="hold-transition skin-purple sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>2</b>POS</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg">Admin<b> 2POS</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- Messages: style can be found in dropdown.less-->

          <!-- Control Sidebar Toggle Button -->
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <?php include 'menu.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->


    <!-- Main content -->
    <section class="content">
      <div class="row">
          <div class="col-md-12">
              <div class="box box">
                <?php
                include 'dbconnect.php';
                $id=$_GET['id_barang'];
                $qw=mysqli_query($db,"SELECT * from barang where id_barang='$id' ");
                $row=mysqli_fetch_array($qw);
                 ?>
                  <div class="box-header with-border">
                      <h3 class="box-title">Form Update Barang</h3>
                  </div>
                  <form class="form-horizontal" method="post">

                      <div class="box-body">
                        <div class="form-group">
                            <label for="idkaryawan" class="col-sm-2 control-label">ID Barang</label>
                            <div class="col-sm-10">
                                <input type="text"  name="idbarang" class="form-control"  placeholder="ID Barang" value="<?php echo $row[0];?>">
                            </div>
                        </div>
                          <div class="form-group">
                              <label for="dua" class="col-sm-2 control-label">Nama Barang</label>
                              <div class="col-sm-10">
                                  <input type="text"  name="namabarang" class="form-control"  placeholder="Nama Barang" value="<?php echo $row[1];?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="dua1" class="col-sm-2 control-label">Harga Beli</label>
                              <div class="col-sm-10">
                                  <input type="text" name="hargabeli" class="form-control"  placeholder="Harga Beli" value="<?php echo $row[2];?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="tiga" class="col-sm-2 control-label">Harga Jual</label>
                              <div class="col-sm-10">
                                  <input type="text"  name="hargajualawal" class="form-control"  placeholder="Harga Jual" value="<?php echo $row[3];?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="tiga" class="col-sm-2 control-label">Stock</label>
                              <div class="col-sm-10">
                                  <input type="text" name="stock" class="form-control"  placeholder="Stock" value="<?php echo $row[5];?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="tiga" class="col-sm-2 control-label">Suplier</label>
                              <div class="col-sm-10">
                                  <input type="text" name="suplier" class="form-control"  placeholder="Suplier" value="<?php echo $row[6];?>">
                              </div>
                          </div>
                          <div class="form-group">
                              <label for="tiga" class="col-sm-2 control-label">Keterangan</label>
                              <div class="col-sm-10">
                                  <input type="text" name="keterangan" class="form-control"  placeholder="Keterangan" value="<?php echo $row[7];?>">
                              </div>
                          </div>
                      </div>
                      <!-- /.box-body -->
                      <div class="box-footer">
                          <input type="submit" class="btn bg-purple pull-left" value="Update" name="submit">
                      </div>
                      <!-- /.box-footer -->
                  </form>
              </div>
          </div>
          <!--/.col (right) -->
      </div>   <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    <div class="pull-right hidden-xs">
      Anything you want
    </div>
    <!-- Default to the left -->
    <strong>Copyright &copy; 2016 <a href="#">Company</a>.</strong> All rights reserved.
  </footer>

  <!-- /.control-sidebar -->
  <!-- Add the sidebar's background. This div must be placed
       immediately after the control sidebar -->
  <div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->

<!-- REQUIRED JS SCRIPTS -->

<!-- jQuery 2.2.3 -->
<script src="plugins/jQuery/jquery-2.2.3.min.js"></script>
<!-- Bootstrap 3.3.6 -->
<script src="bootstrap/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/app.min.js"></script>

</body>
</html>

<?php
include 'dbconnect.php';
$id=$_GET['id_barang'];
if (isset($_POST['submit'])) {
  $idb=$_POST['idbarang'];
  $nb=$_POST['namabarang'];
  $hb=$_POST['hargabeli'];
  $hj=$_POST['hargajual'];
  $stc=$_POST['stock'];
  $sup=$_POST['suplier'];
  $ket=$_POST['keterangan'];

  $ogve="update barang set nama_barang='$nb', harga_jual='$hj', harga_beli='$hb',stock='$stc',suplier='$sup',keterangan='$ket'  where id_barang='$idb' ";
  if (mysqli_query($db,$ogve)) {
    ?>
    <script language="javascript">
    alert("Data Behasil Di Update");
    document.location.href="index.php?page=list_barang";</script>
    <?php
  }else {
    echo "Gagal Input";
  }
}
 ?>