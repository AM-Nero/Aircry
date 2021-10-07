<h3>Member</h3>
<?php include "koneksi.php"; ?>
<table border="0" width="90%" cellpadding="10">
<tr>
  <th>No.</th>
  <th>Akun</th>
  <th>Pelengkapan Akun</th>
  <th width="100px">Aksi</th>
</tr>
<?php
$sqlm = mysql_query("select * from member order by iduser asc");
$no = 1;
while($rm = mysql_fetch_array($sqlm)){
  echo "<tr valign='middle'>
    <td>$no</td>
    <td>Username : <br><big>$rm[unuser]</big> <p>Password : <br><big>$rm[psuser]</big> <p>Nama Member : <br><big>$rm[namauser]</big></td>
    <td>E-Mail : <br><big>$rm[email]</big> <p>Cash Member : <br><big>$rm[cashmember] Gold</big><br></td>
    <td><a href='?p=memberhapus&idm=$rm[iduser]'><button type='button' class='btn btn-more'>Banned</button></a></td>
  </tr>";
  $no++;
}
?>
</table>
