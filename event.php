<?php include "koneksi.php"; ?>
<h3>Event</h3>
<table width="90%" height="43" border="25" cellpadding=20">
<tr>
  <th align="center" width="100" height="20"></th>
  <th width="300">Tema</th>
  <th>Update</th>
</tr>
<?php
$sqle = mysql_query("select * from event order by idevent asc");
$no = 1;
while($re = mysql_fetch_array($sqle)){
  echo "<tr valign='center'>
    <td>
	  <img src='event/$re[foto]' width='100'>
	</td>
	  <td>
	  <p><big>$re[judulevent] </big></p>
	  </td>
	  <td>
	  <b>Update :</b><br>$re[keterangan]</br>
	</td>
  </tr>";
  $no++;
}
?>
</table>
