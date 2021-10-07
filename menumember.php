<?php
if(!empty($_SESSION["usermbr"]) and !empty($_SESSION["passmbr"])){
  echo "<b><g>Selamat Datang, $rm[namauser]</b> <r>|</r> ";
  echo "<b><g>$rm[cashmember] Gold</b> <r>|</r> ";
  echo "<a href='?p=topup'><b><g>TopUp</b></a> <r>|</r>";
  echo "<a href='?p=logout'><b><g>Logout</a></b><r>|</r>";
}else{
  echo "<a href='?p=register'><g>Register</a> <r>|</r> ";
  echo "<a href='?p=login'><g>Login</a>";
}
?>