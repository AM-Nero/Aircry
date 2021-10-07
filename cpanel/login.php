<div class="container">
<div id="login">
<fieldset>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <h3>Welcome Admin</h3>
  <p>Username
    <input name="username" type="text" id="username">
  </p>
  <p>Password 
    <input name="password" type="password" id="password">
  </p>
  <p>Login Sebagai : 
    <label>
    <select name="level" id="level">
      <option>Pilih</option>
      <option value="AdminWeb">AdminWeb</option>
      <option value="GameMaster">GameMaster</option>
      <option value="Staff">Staff</option>
    </select>
    </label>
  </p>
  <p>
    <input name="login" type="submit" value="LOGIN">
</p>
  </form>
  
<?php
if($_POST["login"]){
  include "koneksi.php";
  if($_POST["level"]=="AdminWeb"){
    $sqla = mysql_query("select * from admin where unadm='$_POST[username]' and psadm='$_POST[password]' and level='AdminWeb'");
	$ra = mysql_fetch_array($sqla);
	$row = mysql_num_rows($sqla);
	if($row > 0){
	  session_start();
	  $_SESSION["unweb"]=$ra["unadm"];
	  $_SESSION["psweb"]=$ra["psadm"];
	  echo "Login Berhasil";	
	}else{
	  echo "Login Gagal";
	}
  }else if($_POST["level"]=="GameMaster"){
    $sqla = mysql_query("select * from admin where unadm='$_POST[username]' and psadm='$_POST[password]' and level='GameMaster'");
	$ra = mysql_fetch_array($sqla);
	$row = mysql_num_rows($sqla);
	if($row > 0){
	  session_start();
	  $_SESSION["ungm"]=$ra["unadm"];
	  $_SESSION["psgm"]=$ra["psadm"];
	  echo "Login Berhasil";	
	}else{
	  echo "Login Gagal";
	}
  }else if($_POST["level"]=="Staff"){
    $sqla = mysql_query("select * from admin where unadm='$_POST[username]' and psadm='$_POST[password]' and level='Staff'");
	$ra = mysql_fetch_array($sqla);
	$row = mysql_num_rows($sqla);
	if($row > 0){
	  session_start();
	  $_SESSION["unst"]=$ra["unadm"];
	  $_SESSION["psst"]=$ra["psadm"];
	  echo "Login Berhasil";	
	}else{
	  echo "Login Gagal";
	}
  }
  echo "<META HTTP-EQUIV='Refresh' Content='1; URL=?p=beranda'>";
}
?>
  
</fieldset>
</div>
</div>