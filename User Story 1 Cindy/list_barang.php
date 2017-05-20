<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">Data Barang</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>ID Barang</th>
                        <th>Nama Barang</th>
                        <th>Harga Jual</th>
                        <th>Harga beli</th>
                        <th>Stock</th>
                        <th>Suplier</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      include 'dbconnect.php';
                      $qw=mysqli_query($db,"SELECT * from barang ");
                      while ($a=mysqli_fetch_row($qw)) {
echo "
                        <tr>
                        <td>$a[0]</td>
                        <td>$a[1]</td>
                        <td>$a[2]</td>
                        <td>$a[3]</td>
                        <td>$a[4]</td>
                        <td>$a[5]</td>
                        <td>$a[6]</td>
                        <td style='text-align:center'>
            <a href='edt_barang.php?id_barang=$a[0]'><span data-placement='top' data-toggle='tooltip' title='Edit'><button class='btn btn-primary btn-xs' data-title='Edit'><span class='glyphicon glyphicon-pencil'></span></button><span></a>

          <a name='oid' href='deleteb.php?id_barang=$a[0]' onclick='return checkDelete()' >  <span data-placement='top' data-toggle='tooltip' title='Delete'><button class='btn btn-danger btn-xs' data-title='Delete'><span class='glyphicon glyphicon-trash'></span></button><span></a>
                        </td>
                      </tr>";
                      }
                    ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
<script>
    function datadel(value,jenis){
       document.getElementById('mylink').href="hapus.php?del="+value+"&data="+jenis;
    }
</script>
<script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Yakin datanya mau dihapus?');
}
</script>
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Data akan terhapus !</h4>
            </div>
            <div class="modal-body">
                Anda yakin ingin menghapus data ini ?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                <a id="mylink" href=""><button type="button" class="btn btn-primary">Delete Data</button></a>
            </div>
        </div>
    </div>
</div>

          </div><!-- /.row -->
