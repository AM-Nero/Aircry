<?php include "koneksi.php"; ?>
<h3>Laporan Staff</h3>
<p>
<table border="0" width="90%" cellpadding="10">
<tr>
  <th>No.</th>
  <th>Judul</th>
  <th>Keterangan</th>
  <th width="135px">Tanggal Laporan</th>
  <th width="40px">Aksi</th>
</tr>
<?php
$sqllg = mysql_query("select * from lapgm order by idlapgm asc");
$no = 1;
while($rlg = mysql_fetch_array($sqllg)){
  echo "<tr>
    <td>$no</td>
    <td>$rlg[judul]</td>
    <td>$rlg[ket]</td>
    <td>$rlg[tglkirim]</td>
    <td>
<a href='?p=lapgmsthapus&idlg=$rlg[idlapgm]'><button type='button' class='btn btn-more'>Hapus</button></a></td>
  </tr>";
  $no++;
}
?>
</table>
