<?php
include 'dbconnect.php';
if (isset($_POST['save'])) {
  $idb=$_POST['idbarang'];
  $nb=$_POST['namabarang'];
  $hb=$_POST['diskon_harga'];
  $stc=$_POST['stock'];
  $ket=$_POST['tgl_berlaku'];

  $osas="INSERT into barang VALUES ('$idb','$nb','$hb','$stc','$ket')";
  if (mysqli_query($db,$osas)) {
    ?>
    <script language="javascript">
    alert("Data Behasil Di Input");
    document.location.href="index.php?page=list_diskon";</script>
    <?php
  }else {
    echo "Gagal Input";
  }
}
 ?>
<div class="row">
    <div class="col-md-12">
        <div class="box box">
            <div class="box-header with-border">
                <h3 class="box-title">Form Diskon Barang</h3>
            </div>
            <form class="form-horizontal" method="post">
               <input type="hidden" name="id" value="">
                <div class="box-body">
                  <div class="form-group">
                      <label for="idkaryawan" class="col-sm-2 control-label">ID Barang</label>
                      <div class="col-sm-10">
                          <input type="text"  name="idbarang" class="form-control"  placeholder="ID Barang">
                      </div>
                  </div>
                    <div class="form-group">
                        <label for="dua" class="col-sm-2 control-label">Nama Barang</label>
                        <div class="col-sm-10">
                            <input type="text"  name="namabarang" class="form-control"  placeholder="Nama Barang">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="dua1" class="col-sm-2 control-label">Diskon Harga</label>
                        <div class="col-sm-10">
                            <input type="text" name="diskon_harga" class="form-control"  placeholder="Diskon Harga">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Stock</label>
                        <div class="col-sm-10">
                            <input type="text" name="stock" class="form-control"  placeholder="Stock">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Tanggal Berlaku</label>
                        <div class="col-sm-10">
                            <input type="text" name="tgl_berlaku" class="form-control"  placeholder="Tanggal Berlaku">
                        </div>
                    </div>
                </div>
                <!-- /.box-body -->
                <div class="box-footer">
                    <input type="submit" class="btn bg-purple pull-left" value="Save" name="save">
                </div>
                <!-- /.box-footer -->
            </form>
        </div>
    </div>
    <!--/.col (right) -->
</div>   <!-- /.row -->
