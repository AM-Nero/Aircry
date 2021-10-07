<?php
include "koneksi.php";
$sqlu = mysql_query("select * from member where unuser='$_SESSION[usermbr]'");
$ru = mysql_fetch_array($sqlu);
?>
<div class="grid">
<div id="lapor" align="left">
<fieldset>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <h3><r>Report Masalah</h3>
  <input name="iduser" type="hidden" id="iduser" value="<?php echo "$ru[iduser]"; ?>" />
  <p><r>
    Tipe Masalah
      <input name="jenislap" type="text" id="jenislap">
  </p>
  <p><r>Keterangan
    <textarea name="keterangan" id="keterangan"></textarea>
  </p>
  <p>
    <r>
    <input name="kirim" type="submit" id="kirim" value="Kirim Laporan" />
  </p>
</form>
<?php
if($_POST["kirim"]){
  include "koneksi.php";
  $sqllp = mysql_query("insert into laporan (idlap, iduser, jenislap, keterangan, tglkirim) values ('$_POST[idlap]', '$_POST[iduser]', '$_POST[jenislap]' , '$_POST[keterangan]', NOW())");
  if($sqllp){ 
  	echo "Berhasil Dikirim";
  }else{
  	echo "Pengiriman Gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='2; URL=?p=laporan'>";
}
?>

</fieldset>
</div>
</div>