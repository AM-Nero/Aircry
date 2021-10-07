<div id="login">
<fieldset>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <h3>Login Member </h3>
  <p>Username
    <input name="unuser" type="text" id="unuser">
  </p>
  <p>Password 
    <input name="psuser" type="password" id="psuser">
  </p>
  <p>
    <input name="login" type="submit" value="Login">
</p>
  </form>
  
<?php
if($_POST["login"]){
  include "koneksi.php";
    $sqlm = mysql_query("select * from member where unuser='$_POST[unuser]' and psuser='$_POST[psuser]'");
	$rm = mysql_fetch_array($sqlm);
	$row = mysql_num_rows($sqlm);
	if($row > 0){
	  session_start();
	  $_SESSION["usermbr"]=$rm["unuser"];
	  $_SESSION["passmbr"]=$rm["psuser"];
	  echo "Login Berhasil";	
	}else{
	  echo "Login Gagal";
	}
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=beranda'>";
}
?>
  
</fieldset>
</div>
