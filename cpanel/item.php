<?php include "koneksi.php"; ?>
<h3>Item</h3>
<a href="<?php echo "?p=itemadd";?>">Tambah Data Item
</a><p>
<table width="90%" height="43" border="0" cellpadding="10">
<tr>
  <th height="39">No.</th>
  <th align="center" width="30%">FOTO</th>
  <th>KETERANGAN</th>
  <th width="12%">AKSI</th>
</tr>
<?php
$sqli = mysql_query("select * from item order by iditem asc");
$no = 1;
while($ri = mysql_fetch_array($sqli)){
  echo "<tr valign='top'>
    <td>$no</td>
    <td>
	  <img src='../item/$ri[foto]' width='300'><p>
	</td>
    <td>
	  <h3>$ri[kodeitem]</h3>
	  <p><b>Nama : </b><br><big>$ri[nmitem]</big></br></p>
	  <p><b>Harga : </b><br><big>$ri[harga] Gold</big></br></p>
	  <b>Keterangan :</b><br>$ri[keterangan]</br>
	</td>
    <td>
	  <a href='?p=itemedit&idi=$ri[iditem]'><button type='button' class='btn btn-more'>Ubah</button></a> . 
	  <a href='?p=itemdel&idi=$ri[iditem]'><button type='button' class='btn btn-more'><r>Hapus</a></button></td>
  </tr>";
  $no++;
}
?>
</table>
