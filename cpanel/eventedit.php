<?php
include "koneksi.php";
$sqle = mysql_query("select * from event where idevent='$_GET[ide]'");
$re = mysql_fetch_array($sqle);
?>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <h3>Tambah Data Event</h3>
  <input name="idevent" type="hidden" id="idevent" value="<?php echo "$re[idevent]"; ?>" />
  <p>Kode Event 
    <input name="kdevent" type="text" id="kdevent" value="<?php echo "$re[kdevent]"; ?>">
  </p>
  <p>Judul Event
    <input name="judulevent" type="text" id="judulevent" value="<?php echo "$re[judulevent]"; ?>">
  </p>
  <p>Keterangan
    <textarea name="keterangan" id="keterangan" value="<?php echo "$re[keterangan]"; ?>"></textarea>
  </p>
  <p>
    <input name="simpan" type="submit" id="simpan" value="Simpan Data Event" />
  </p>
</form>

<?php
if($_POST["simpan"]){
  include "koneksi.php";
  $nmfoto  = $_FILES["foto"]["name"];
  $lokfoto = $_FILES["foto"]["tmp_name"];
  if(!empty($lokfoto)){	
	 move_uploaded_file($lokfoto, "../event/$nmfoto");
  }
  $sqle = mysql_query("update event set kdevent='$_POST[kdevent]', judulevent='$_POST[judulevent]', keterangan='$_POST[keterangan]' where idevent='$_POST[idevent]'");
  if($sqle){ 
  	echo "Data Berhasil Disimpan";
  }else{
  	echo "Penyimpanan Data Gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='2; URL=?p=event'>";
}
?>