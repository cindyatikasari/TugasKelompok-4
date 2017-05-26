<div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">
                  <h3 class="box-title">List Pelanggan</h3>
                </div><!-- /.box-header -->
                <div class="box-body">
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>Nama</th>
                        <th>Tanggal Pemesanan</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php

                      include 'dbconnect.php';
                      $qw=mysqli_query($db,"SELECT * from pelanggan ");
                      while ($a=mysqli_fetch_row($qw)) {
echo "
                        <tr>
                        <td>$a[0]</td>
                        <td>$a[3]</td>
                        </tr>";
                      }
                    ?>
                    </tbody>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
</div><!-- /.row -->
