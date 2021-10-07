<?php
include "koneksi.php";
$sqla = mysql_query("select * from admin where unadm='$_SESSION[ungm]'");
$ra = mysql_fetch_array($sqla);
?>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <h3>Tambah Data Event</h3>
  <input name="idadm" type="hidden" id="idadm" value="<?php echo "$ra[idadm]"; ?>" />
  <p>Kode Event 
    <input name="kdevent" type="text" id="kdevent">
  </p>
  <p>Judul Event
    <input name="judulevent" type="text" id="judulevent">
  </p>
  <p>Keterangan
    <textarea name="keterangan" id="keterangan"></textarea>
  </p>
  <p>Image
    <input name="foto" type="file" id="foto">
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
  $sqle = mysql_query("insert into event (idadm, kdevent, judulevent, keterangan, foto) values ('$_POST[idadm]', '$_POST[kdevent]', '$_POST[judulevent]', '$_POST[keterangan]', '$nmfoto')");
  if($sqle){ 
  	echo "Data Berhasil Disimpan";
  }else{
  	echo "Penyimpanan Data Gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='2; URL=?p=event'>";
}
?>