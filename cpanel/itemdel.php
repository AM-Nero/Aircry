<?php 
  include "koneksi.php";
  $sqli = mysql_query("delete from item where iditem='$_GET[idi]'"); 
  if($sqli){ 
  	echo "Data Berhasil Dihapus";
  }else{
  	echo "Gagal Menghapus Data";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=item'>"; 
?>
