<?php 
  include "koneksi.php";
  $sqli = mysql_query("delete from lapweb where idlapweb='$_GET[idlw]'"); 
  if($sqli){ 
  	echo "Pesan Berhasil Dihapus";
  }else{
  	echo "Gagal Menghapus Pesan";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=lapweb'>"; 
?>
