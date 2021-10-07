<?php 
  include "koneksi.php";
  $sqlm = mysql_query("delete from member where iduser='$_GET[idm]'"); 
  if($sqlm){ 
  	echo "Member Berhasil Di Banned";
  }else{
  	echo "Gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=member'>"; 
?>
