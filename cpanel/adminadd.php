<form name="form1" method="post" action="" enctype="multipart/form-data">
  <p>Tambah Data Admin  </p>
  <p>Username
    <input name="unadm" type="text" id="unadm">
  </p>
  <p>Password 
    <input name="psadm" type="text" id="psadm">
  </p>
  <p>Level
    <label>
    <select name="level" id="level">
      <option value="AdminWeb">AdminWeb</option>
      <option value="GameMaster">GameMaster</option>
      <option value="Staff">Staff</option>
            </select>
    </label>
</p>
  <p>Nama Lengkap  
    <input name="namaadmin" type="text" id="namaadmin">
  </p>
  <p>
    <input name="simpan" type="submit" id="simpan" value="Simpan Data Admin">
</p>
</form>

<?php
if($_POST["simpan"]){
  include "koneksi.php";
  $sqla = mysql_query("insert into admin (unadm, psadm, level, namaadmin) values ('$_POST[unadm]' ,'$_POST[psadm]' , '$_POST[level]' ,'$_POST[namaadmin]')");
  if($sqla){ 
  	echo "Data Berhasil Disimpan";
  }else{
  	echo "Penyimpanan Data Gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=admin'>";
}
?>