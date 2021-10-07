<?php include "koneksi.php"; ?>
<h3>Laporan Dari GM</h3>
<p>
<table border="0" width="90%" cellpadding="10">
<tr>
  <th width="20px">No.</th>
  <th>Judul</th>
  <th>Keterangan</th>
  <th width="135px">Tanggal Laporan</th>
  <th width="90px">Aksi</th>
</tr>
<?php
$sqllw = mysql_query("select * from lapweb order by idlapweb asc");
$no = 1;
while($rlw = mysql_fetch_array($sqllw)){
  echo "<tr>
    <td>$no</td>
    <td>$rlw[judul]</td>
    <td>$rlw[ket]</td>
    <td>$rlw[tglkirim]</td>
	<td>
<a href='?p=lapwebhapus&idlw=$rlw[idlapweb]'><button type='button' class='btn btn-more'>Hapus</button></a></td>
  </tr>";
  $no++;
}
?>
</table>
