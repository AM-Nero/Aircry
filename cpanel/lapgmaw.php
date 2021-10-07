<?php
include "koneksi.php";
$sqla = mysql_query("select * from admin where unadm='$_SESSION[ungm]'");
$ra = mysql_fetch_array($sqla);
?>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <h3>Kirim Pemberitahuan Pembaharuan Website</h3>
<p>Nama Admin<br>
<bld><?php echo "$ra[namaadmin]";?></bld></p>
  <p>Tema
    <input name="judul" type="text" id="judul">
  </p>
  <p>Keterangan
    <textarea name="ket" id="ket"></textarea>
  </p>
  <p>
    <input name="kirim" type="submit" id="kirim" value="Kirim Ke Admin Web" />
  </p>
</form>

<?php
if($_POST["kirim"]){
  include "koneksi.php";
  $sqllw = mysql_query("insert into lapweb (judul, ket, tglkirim) values ('$_POST[judul]', '$_POST[ket]', NOW())");
  if($sqllw){ 
  	echo "Berhasil Mengirim Pesan";
  }else{
  	echo "GAGAL";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='2; URL=?p=lapgmaw'>";
}
?>