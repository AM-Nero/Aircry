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

<input name="idlap" type="hidden" value="<?php echo "$rls[idlap]"; ?>">
<p>Nama User<br>
<bld><?php echo "$ru[namauser]";?></bld></p>
<p>Jenis Laporan<br>
<bld><?php echo "$rls[jenislap]";?></bld></p>
<p>Keterangan<br>
<bld><?php echo "$rls[keterangan]";?></bld></p>
</fieldset>
</div>

<input name="judul" id="judul" type="hidden" value="<?php echo "$rls[jenislap]";?>"></input>
<input name="kodelapgm" id="kodelapgm" type="hidden" value="<?php echo "$rls[kdlap]";?>"></input>
<div id="view">
<fieldset>
<h3>Balas</h3>
<p>Nama Admin<br>
<bld><?php echo "$rm[namaadmin]";?></bld></p>
<p>Jawaban Ke GM</p>
<textarea name="ket" id="ket" type="text"></textarea>
<h3></h3>
<label>
<input type="submit" name="sgm" id="sgm" value="Kirim Ke GM" />
</label>
</fieldset>
</div>
</div>
</form>
<?php
if($_POST["sgm"]){
  include "koneksi.php";
  $sqllg = mysql_query("insert into lapgm (judul, ket, tglkirim) values ('$_POST[judul]' , '$_POST[ket]', NOW())");
  if($sqllg){ 
  	echo "Berhasil Dikirim";
  }else{
  	echo "GAGAL";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=lapstaff'>";
}
?>