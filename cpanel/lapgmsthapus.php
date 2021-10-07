<?php 
  include "koneksi.php";
  $sqllg = mysql_query("delete from lapgm where idlapgm='$_GET[idlg]'"); 
  if($sqllg){ 
  	echo "Pesan Berhasil Dihapus";
  }else{
  	echo "Gagal Menghapus Pesan";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=lapgmst'>"; 
?>
