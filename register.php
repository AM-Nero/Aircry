<div class="grid">
<div id="view">
<fieldset>
<form name="form1" method="post" action="" enctype="multipart/form-data">
  <h3>Form Registrasi</h3>
  <p>Username
    <input name="unuser" type="text" id="unuser" />
  </p>
  <p>Password 
    <input name="psuser" type="text" id="psuser">
  </p>
  <p>E-Mail
    <input name="email" type="text" id="email">
  </p>
  <p>Pin	
    <input name="pin" type="text" id="pin">
  </p>
  <p>Nama Lengkap
    <input name="namauser" type="text" id="namauser">
  </p>
  <p>
    <input name="register" type="submit" id="register" value="Register sebagai Member">
  </p>
</form>
</fieldset>
</div>
</div>
<?php
if($_POST["register"]){
  include "koneksi.php";
  $sqlm = mysql_query("insert into member (unuser, psuser, email, pin, namauser, tgldaftar) values ('$_POST[unuser]', '$_POST[psuser]', '$_POST[email]', '$_POST[pin]', '$_POST[namauser]', NOW())");
  
  if($sqlm){
  	echo "Proses registrasi berhasil. Silahkan Login";
  }else{
  	echo "Proses registrasi gagal";
  }
  echo "<META HTTP-EQUIV='Refresh' Content='2; URL=?p=beranda'>";
}
?> 
</div>
</fieldset>