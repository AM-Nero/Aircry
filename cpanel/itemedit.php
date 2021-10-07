<?php
include "koneksi.php";
$sqli = mysql_query("select * from item where iditem='$_GET[idi]'");
$ri = mysql_fetch_array($sqli);
?>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <h3>Tambah Data Item</h3>
  <input name="iditem" type="hidden" id="iditem" value="<?php echo "$ri[iditem]"; ?>" />
  <p>Kode Item 
    <input name="kodeitem" type="text" id="kodeitem" value="<?php echo "$ri[kodeitem]"; ?>">
  </p>
  <p>Nama Item
    <input name="nmitem" type="text" id="nmitem" value="<?php echo "$ri[nmitem]"; ?>">
  </p>
  <p>Keterangan
    <textarea name="keterangan" id="keterangan" value="<?php echo "$ri[keterangan]"; ?>"></textarea>
  </p>
  <p>Harga 
    <input name="harga" type="text" id="harga" value="<?php echo "$ri[harga]"; ?>">
  </p>
  <p>
    <input name="simpan" type="submit" id="simpan" value="Simpan Data Item" />
  </p>
</form>

<?php
if($_POST["simpan"]){
  include "koneksi.php";
  $nmfoto  = $_FILES["foto"]["name"];
  $lokfoto = $_FILES["foto"]["tmp_name"];
  if(!empty($lokfoto)){	
	 move_uploaded_file($lokfoto, "../item/$nmfoto");
  }
  $sqli = mysql_query("update item set kodeitem='$_POST[kodeitem]', nmitem='$_POST[nmitem]', keterangan='$_POST[keterangan]', harga='$_POST[harga]' where iditem='$_POST[iditem]'");
  if($sqli){ 
  	echo "Data Berhasil Disimpan";
  }else{
  	echo "Penyimpanan Data Gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='2; URL=?p=item'>";
}
?>