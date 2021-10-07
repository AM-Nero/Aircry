<?php include "koneksi.php"; ?>
<h3>Event</h3>
<a href="<?php echo "?p=eventadd";?>">Tambah Event
</a><p>
<table width="90%" height="43" border="0" cellpadding="10">
<tr>
  <th height="39" width="10%">No.</th>
  <th align="center" width="20%">FOTO</th>
  <th>KETERANGAN</th>
  <th width="100px">AKSI</th>
</tr>
<?php
$sqle = mysql_query("select * from event order by idevent asc");
$no = 1;
while($re = mysql_fetch_array($sqle)){
  echo "<tr valign='top'>
    <td>$no</td>
    <td>
	  <img src='../event/$re[foto]' width='200'><p>
	</td>
    <td>
	  <h3>$re[kdevent]</h3>
	  <p><b>Judul Event : </b><br><big>$re[judulevent]</big></br></p>
	  <b>Keterangan :</b><br>$re[keterangan]</br>
	</td>
    <td>
	  <a href='?p=eventedit&ide=$re[idevent]'><button type='button' class='btn btn-more'>Ubah</button></a> . 
	  <a href='?p=eventdel&ide=$re[idevent]'><button type='button' class='btn btn-more'><r>Hapus</button></a></td>
  </tr>";
  $no++;
}
?>
</table>
