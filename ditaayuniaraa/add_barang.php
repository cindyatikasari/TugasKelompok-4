<?php
include 'dbconnect.php';
if (isset($_POST['save'])) {
  $idb=$_POST['idbarang'];
  $nb=$_POST['namabarang'];
  $hb=$_POST['hargabeli'];
  $hj=$_POST['hargajual'];
  $stc=$_POST['stock'];
  $sup=$_POST['suplier'];
  $ket=$_POST['keterangan'];

  $osas="INSERT into barang VALUES ('$idb','$nb','$hb','$hj','$stc','$sup','$ket')";
  if (mysqli_query($db,$osas)) {
    ?>
    <script language="javascript">
    alert("Data Behasil Di Input");
    document.location.href="index.php?page=list_barang";</script>
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
                <h3 class="box-title">Form Tambah Barang</h3>
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
                        <label for="dua1" class="col-sm-2 control-label">Harga Beli</label>
                        <div class="col-sm-10">
                            <input type="text" name="hargabeli" class="form-control"  placeholder="Harga Beli">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Harga Jual</label>
                        <div class="col-sm-10">
                            <input type="text"  name="hargajual" class="form-control"  placeholder="Harga Jual">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Stock</label>
                        <div class="col-sm-10">
                            <input type="text" name="stock" class="form-control"  placeholder="Stock">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Suplier</label>
                        <div class="col-sm-10">
                            <input type="text" name="suplier" class="form-control"  placeholder="Suplier">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="tiga" class="col-sm-2 control-label">Keterangan</label>
                        <div class="col-sm-10">
                            <input type="text" name="keterangan" class="form-control"  placeholder="Keterangan">
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
