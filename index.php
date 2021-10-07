<?php 
  session_start(); 
  include "koneksi.php";
  $sqlm = mysql_query("select * from member where unuser='$_SESSION[usermbr]'");
  $rm = mysql_fetch_array($sqlm);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Almalikul Nero</title>
</head>

<body>
<div class="container1">
  <div class="grid">
    <div class="dh5"><big><b>Aicry</b></big></div>
    <div class="dh7" align="right"><?php include "menumember.php"; ?></div>
  </div>
</div>

<div class="container2">
  <div class="grid">
    <div class="dh12"></div>
  </div>
</div>
<div class="container3">
  <ul id="menuz">
    <li><a href="<?php echo "?p=beranda"; ?>">Home</a></li>
    <li><a href="<?php echo "?p=event"; ?>">Event</a></li>
    <li><a href="<?php echo "?p=item"; ?>">Item</a></li>
    <li><a href="<?php echo "?p=laporan"; ?>">Report</a></li>
    <li><a href="<?php echo "?p=about"; ?>">Tentang Kami</a></li>
  </ul>
</div>
<div class="container4">
  <div class="grid">
    <?php
	if($_GET["p"] == "tipekamar"){
	  include "tipekamar.php";
	}else if($_GET["p"] == "register"){
	  include "register.php";
	}else if($_GET["p"] == "login"){
	  include "login.php";
	}else if($_GET["p"] == "logout"){
	  include "logout.php";
	}else if($_GET["p"] == "event"){
	  include "event.php";
	}else if($_GET["p"] == "item"){
	  include "item.php";
	}else if($_GET["p"] == "beliitem"){
	  include "beliitem.php";
	}else if($_GET["p"] == "laporan"){
	  include "laporan.php";
	}else if($_GET["p"] == "about"){
	  include "about.php";
	}else{
	  include "home.php";
	}
	?>
  </div>
</div>
<div class="container5">
  <div class="grid">
    <?php include "footer.php"; ?>
  </div>
</div>
</body>
</html>
