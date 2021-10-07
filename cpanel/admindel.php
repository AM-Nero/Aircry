<?php 
  include "koneksi.php";
  $sqla = mysql_query("delete from admin where idadm='$_GET[ida]'"); 
  if($sqla){ 
  	echo "Data Berhasil Dihapus";
  }else{
  	echo "Gagal Menghapus Data";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=admin'>"; 
?>
