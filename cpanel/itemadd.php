<?php
include "koneksi.php";
$sqla = mysql_query("select * from admin where unadm='$_SESSION[ungm]'");
$ra = mysql_fetch_array($sqla);
?>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <h3>Tambah Data Item</h3>
  <input name="idadm" type="hidden" id="idadm" value="<?php echo "$ra[idadm]"; ?>" />
  <p>Kode Item 
    <input name="kodeitem" type="text" id="kodeitem">
  </p>
  <p>Nama Item
    <input name="nmitem" type="text" id="nmitem">
  </p>
  <p>Keterangan
    <textarea name="keterangan" id="keterangan"></textarea>
  </p>
  <p>Harga 
    <input name="harga" type="text" id="harga">
  </p>
  <p>Gambar
    <input name="foto" type="file" id="foto">
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
  $sqli = mysql_query("insert into item (idadm, kodeitem, nmitem, keterangan, harga, foto) values ('$_POST[idadm]', '$_POST[kodeitem]', '$_POST[nmitem]', '$_POST[keterangan]', '$_POST[harga]', '$nmfoto')");
  if($sqli){ 
  	echo "Data Berhasil Disimpan";
  }else{
  	echo "Penyimpanan Data Gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='2; URL=?p=item'>";
}
?>