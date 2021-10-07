<?php 
  include "koneksi.php";
  $sqli = mysql_query("delete from laporan where idlap='$_GET[idls]'"); 
  if($sqli){ 
  	echo "Pesan Berhasil Dihapus";
  }else{
  	echo "Gagal Menghapus Pesan";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=lapstaff'>"; 
?>
