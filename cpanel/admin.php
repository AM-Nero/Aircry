<?php include "koneksi.php"; ?>
<h3>Data Admin</h3>
<a href="<?php echo "?p=adminadd";?>">Tambah Data Admin
</a><p>
<table border="0" width="90%" cellpadding="10">
<tr>
  <th>No.</th>
  <th>USERNAME</th>
  <th>PASSWORD</th>
  <th>LEVEL</th>
  <th>NAMA LENGKAP</th>
  <th>AKSI</th>
</tr>
<?php
$sqla = mysql_query("select * from admin order by idadm asc");
$no = 1;
while($ra = mysql_fetch_array($sqla)){
  echo "<tr>
    <td>$no</td>
    <td>$ra[unadm]</td>
    <td>$ra[psadm]</td>
    <td>$ra[level]</td>
    <td>$ra[namaadmin]</td>
    <td>
<a href='?p=adminedit&ida=$ra[idadm]'>Edit</a> | 
<a href='?p=admindel&ida=$ra[idadm]'>Hapus</a></td>
  </tr>";
  $no++;
}
?>
</table>
