<?php 
  include "koneksi.php";
  $sqlt = mysql_query("delete from topup where idtopup='$_GET[idt]'"); 
  if($sqlt){ 
  	echo "Data Berhasil Dihapus";
  }else{
  	echo "Gagal Menghapus Data";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=topup'>"; 
?>
