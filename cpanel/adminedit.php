<?php
include "koneksi.php";
$sqla = mysql_query("select * from admin where idadm='$_GET[ida]'");
$ra = mysql_fetch_array($sqla);
?>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <p>Ubah Data Admin  </p>
  <input type="hidden" name="idadm" value="<?php echo "$ra[idadm]"; ?>" />
  <p>Username
    <input name="unadm" type="text" id="unadm" value="<?php echo "$ra[unadm]"; ?>" disabled>
  </p>
  <p>Password 
    <input name="psadm" type="text" id="psadm" value="<?php echo "$ra[psadm]"; ?>">
  </p>
  <p>Nama Lengkap  
    <input name="namaadmin" type="text" id="namaadmin" value="<?php echo "$ra[namaadmin]"; ?>">
  </p>
  <p>Level 
    <input name="level" type="text" id="level" value="<?php echo "$ra[level]"; ?>" disabled />
  </p>
  <p>
    <input name="simpan" type="submit" id="simpan" value="Simpan Data Admin">
</p>
</form>

<?php
if($_POST["simpan"]){
  include "koneksi.php";
  $sqla = mysql_query("update admin set psadm='$_POST[psadm]', namaadmin='$_POST[namaadmin]' where idadm='$_POST[idadm]'");
  if($sqla){ 
  	echo "Data Berhasil Disimpan";
  }else{
  	echo "Penyimpanan Data Gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=admin'>";
}
?>