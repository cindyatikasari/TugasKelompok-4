<?php
include "dbconnect.php";
$id=$_GET['id_barang'];
$query=mysqli_query($db,"delete from barang where id_barang='$id'");
if($query){
?><script language="javascript">document.location.href="index.php?page=list_barang";</script><?php
}else{
echo "gagal hapus data";
}
?>
