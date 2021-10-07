<?php
include "koneksi.php";
$sqli = mysql_query("select * from item where iditem='$_GET[idi]'");
$ri = mysql_fetch_array($sqli);
echo "<div class='dh12' align='center'>";
echo "<div id='view'>";
echo "<big>$ri[kodeitem]<p></big><bld><r>$ri[nmitem]</bld>";
echo "<img src='item/$ri[foto]' width='350px' height='200px'>";
echo "<big><p>Keterangan : <p></big><bld><r>$ri[keterangan]";
echo "</div>";