<?php include "koneksi.php";
$sqls = mysql_query("select * from laporan where idlap='$_GET[idls]'");
$rls = mysql_fetch_array($sqls);
$sqlm = mysql_query("select * from admin order by idadm asc");
$rm = mysql_fetch_array($sqlm);
$sqlu = mysql_query("select * from member order by iduser asc");
$ru = mysql_fetch_array($sqlu);
?>
<form name="form1" method="post" action="" enctype="multipart/form-data">
<div class="grid">
<div id="view">
<fieldset>
<h3>Laporan Member</h3>
<input name="idlap" type="hidden" value="<?php echo "$rls[idlap]"; ?>"></input>
<p>Nama User<br>
<bld><?php echo "$ru[namauser]";?></bld></p>
<p>Jenis Laporan<br>
<bld><?php echo "$rls[jenislap]";?></bld></p>
<p>Keterangan<br>
<bld><?php echo "$rls[keterangan]";?></bld></p>
<h3>Balas</h3>
<p>Nama Admin<br>
<bld><?php echo "$rm[namaadmin]";?></bld></p>
<p>Jawaban Ke Member</p>
<textarea name="jawaban" id="jawaban" type="text"></textarea>
<input type="submit" name="smb" id="smb" value="Kirim Ke Member" /></input>
</fieldset>
</div>
</div>
</form>

<?php
if($_POST["smb"]){
  include "koneksi.php";
  $sqls = mysql_query("update laporan set jawaban='$_POST[jawaban]' where idlap='$_POST[idlap]'");
  if($sqls){ 
  	echo "Berhasil Dikirim";
  }else{
  	echo "GAGAL";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=lapstaff'>";
}
?>