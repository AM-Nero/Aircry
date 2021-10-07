<?php
echo "<h3><b>Item</h3>";
include "koneksi.php";
$sqli = mysql_query("select * from item order by iditem asc");
while($ri = mysql_fetch_array($sqli)){
echo "<div class='dh4' align='center'>";
echo "<div id='prd'>";
echo "<fieldset>";
echo "<img src='item/$ri[foto]' width='350px' height='350px'>";
echo "<p><big>$ri[kodeitem]<p></big><bld><g>$ri[nmitem]</bld>";
echo "<big><p>Keterangan : <p></big><bld><r>$ri[keterangan]</bld>";
echo "<bld><p>Harga : $ri[harga] Gold</bld>";
$btn = "<p><a href='?p=beliitem&idi=$ri[iditem]&idm=$rm[iduser]'><button type='button' class='btn btn-more'>Buy Item</button></a>";
if(!empty($_SESSION["usermbr"]) and !empty($_SESSION["passmbr"])){
    	echo "$btn";
	}else{
	  echo "<p><a href='?p=login'><button type='button' class='btn btn-more'>Buy Item</button></a>";
	}
echo "</fieldset>";
echo "</div>";
echo "</div>";
}
?>