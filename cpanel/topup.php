<?php include "koneksi.php"; ?>
<h3>Kode Voucer</h3>
<a href="<?php echo "?p=topupadd";?>">Tambah Kode Voucer
</a><p>
<table border="0" width="90%" cellpadding="10">
<tr>
  <th>No.</th>
  <th>Kode Voucer</th>
  <th>Nilai</th>
  <th>Status</th>
  <th width="100px">Aksi</th>
</tr>
<?php
$sqlt = mysql_query("select * from topup order by idtopup asc");
$no = 1;
while($rt = mysql_fetch_array($sqlt)){
  echo "<tr>
    <td>$no</td>
    <td>$rt[kodetopup]</td>
    <td>$rt[nilai] Gold</td>
    <td>$rt[status]</td>
    <td>
<a href='?p=topupdel&idt=$rt[idtopup]'><button type='button' class='btn btn-more'><r>Hapus</button></a></td>
  </tr>";
  $no++;
}
?>
</table>
