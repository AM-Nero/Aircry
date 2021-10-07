<?php
  $host	= "localhost";
  $user = "root";
  $pass = "";
  $db	= "db_game";
  
  $con   = mysql_connect($host, $user, $pass);
  $condb = mysql_select_db($db, $con);
?>