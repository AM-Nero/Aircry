<?php include "koneksi.php"; ?>
<h3>Data Laporan Member</h3>
<p>
<table border="0" width="90%" cellpadding="10">
<tr>
  <th>No.</th>
  <th>Jenis Laporan</th>
  <th>Keterangan</th>
  <th width="135px">Tanggal Laporan</th>
  <th width="90px">Aksi</th>
</tr>
<?php
$sqlls = mysql_query("select * from laporan order by idlap asc");
$no = 1;
while($rls = mysql_fetch_array($sqlls)){
  echo "<tr>
    <td>$no</td>
    <td>$rls[jenislap]</td>
    <td>$rls[keterangan]</td>
    <td>$rls[tglkirim]</td>
    <td>
<a href='?p=lapstaffblsgm&idls=$rls[idlap]'>Kirim Ke GM</a>   
<a href='?p=lapstaffblsmbr&idls=$rls[idlap]'>Balas Member</a> 
<a href='?p=lapstaffhapus&idls=$rls[idlap]'>Hapus</a></td>
  </tr>";
  $no++;
}
?>
</table>
