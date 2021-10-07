<form name="form1" method="post" action="" enctype="multipart/form-data">
  <p>Tambah Kode Voucer</p>
  <p>Kode Voucer
    <input name="kodetopup" type="text" id="kodetopup">
  </p>
  <p>Nilai 
    <input name="nilai" type="text" id="nilai">
    <label>
    <input type="hidden" name="status" id="status" value="<?php echo "Ok"; ?>"/>
    </label>
  </p>
  <p>
    <input name="simpan" type="submit" id="simpan" value="Simpan Kode">
</p>
</form>

<?php
if($_POST["simpan"]){
  include "koneksi.php";
  $sqlt = mysql_query("insert into topup (kodetopup, nilai, status) values ('$_POST[kodetopup]' ,'$_POST[nilai]' , '$_POST[status]')");
  if($sqlt){ 
  	echo "Data Berhasil Disimpan";
  }else{
  	echo "Penyimpanan Data Gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=topup'>";
}
?>