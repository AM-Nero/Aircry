<?php session_start(); ?>
<link rel="stylesheet" type="text/css" href="style.css" />
<title>Login Dulu Ya</title>
<?php
if(!empty($_SESSION["unweb"]) and !empty($_SESSION["psweb"])){
include "koneksi.php";
$sqla = mysql_query("select * from admin where unadm='$_SESSION[unweb]'");
$ra = mysql_fetch_array($sqla);
?>
<div class="container1">
  <div class="grid">
    <div class="dh3">
	  <ul id="menu">
	    <li><a href="#">Welcome, <?php echo"$ra[namaadmin]"; ?></a></li>
	    <li><a href="<?php echo"?p=beranda"; ?>">Beranda</a></li>
	    <li><a href="<?php echo"?p=admin"; ?>">Admin</a></li>
	    <li><a href="<?php echo"?p=lapweb"; ?>">Laporan Masuk</a></li>
	    <li><a href="<?php echo"?p=logout"; ?>">Logout</a></li>
	  </ul>
	</div>
	<div class="dh9">
	  <div id="isiadmin">
<?php
  if($_GET["p"] == "logout"){
    include "logout.php";
  }else if($_GET["p"] == "admin"){
    include "admin.php";
  }else if($_GET["p"] == "adminadd"){
    include "adminadd.php";
  }else if($_GET["p"] == "adminedit"){
    include "adminedit.php";
  }else if($_GET["p"] == "admindel"){
    include "admindel.php";
  }else if($_GET["p"] == "lapweb"){
    include "lapweb.php";
  }else if($_GET["p"] == "lapwebhapus"){
    include "lapwebhapus.php";
  }else{
    include "home.php";
  }
?>
      </div>
    </div>
  </div>
</div>
<?php
}else if(!empty($_SESSION["ungm"]) and !empty($_SESSION["psgm"])){
include "koneksi.php";
$sqla = mysql_query("select * from admin where unadm='$_SESSION[ungm]'");
$ra = mysql_fetch_array($sqla);
?>
<div class="container1">
  <div class="grid">
    <div class="dh3">
	  <ul id="menu">
	    <li><a href="#">Welcome, <?php echo"$ra[namaadmin]"; ?></a></li>
	    <li><a href="<?php echo"?p=beranda"; ?>">Beranda</a></li>
	    <li><a href="<?php echo"?p=lapgmst"; ?>">Laporan Masuk</a></li>
	    <li><a href="<?php echo"?p=lapgmaw"; ?>">Kirim Laporan</a></li>
	    <li><a href="<?php echo"?p=event"; ?>">Event</a></li>
	    <li><a href="<?php echo"?p=topup"; ?>">Top Up</a></li>
	    <li><a href="<?php echo"?p=item"; ?>">Item</a></li>
	    <li><a href="<?php echo"?p=member"; ?>">Member</a></li>
	    <li><a href="<?php echo"?p=logout"; ?>">Logout</a></li>
	  </ul>
	</div>
	<div class="dh9">
	  <div id="isiadmin">
<?php
  if($_GET["p"] == "logout"){
    include "logout.php";
  }else if($_GET["p"] == "topup"){
    include "topup.php";
  }else if($_GET["p"] == "topupadd"){
    include "topupadd.php";
  }else if($_GET["p"] == "topupdel"){
    include "topupdel.php";
  }else if($_GET["p"] == "item"){
    include "item.php";
  }else if($_GET["p"] == "itemadd"){
    include "itemadd.php";
  }else if($_GET["p"] == "itemdel"){
    include "itemdel.php";
  }else if($_GET["p"] == "itemedit"){
    include "itemedit.php";
  }else if($_GET["p"] == "event"){
    include "event.php";
  }else if($_GET["p"] == "eventadd"){
    include "eventadd.php";
  }else if($_GET["p"] == "eventdel"){
    include "eventdel.php";
  }else if($_GET["p"] == "eventedit"){
    include "eventedit.php";
  }else if($_GET["p"] == "memberhapus"){
    include "memberhapus.php";
  }else if($_GET["p"] == "lapgmst"){
    include "lapgmst.php";
  }else if($_GET["p"] == "lapgmsthapus"){
    include "lapgmsthapus.php";
  }else if($_GET["p"] == "lapgmaw"){
    include "lapgmaw.php";
  }else if($_GET["p"] == "member"){
    include "member.php";
  }else{
    include "home.php";
  }
?>
      </div>
    </div>
  </div>
</div>
<?php
}else if(!empty($_SESSION["unst"]) and !empty($_SESSION["psst"])){
include "koneksi.php";
$sqla = mysql_query("select * from admin where unadm='$_SESSION[unst]'");
$ra = mysql_fetch_array($sqla);
?>
<div class="container1">
  <div class="grid">
    <div class="dh3">
	  <ul id="menu">
	    <li><a href="#">Welcome, <?php echo"$ra[namaadmin]"; ?></a></li>
	    <li><a href="<?php echo"?p=beranda"; ?>">Beranda</a></li>
	    <li><a href="<?php echo"?p=lapstaff"; ?>">Laporan</a></li>
	    <li><a href="<?php echo"?p=logout"; ?>">Logout</a></li>
	  </ul>
	</div>
	<div class="dh9">
	  <div id="isiadmin">
<?php
  if($_GET["p"] == "logout"){
    include "logout.php";
  }else if($_GET["p"] == "lapstaff"){
    include "lapstaff.php";
  }else if($_GET["p"] == "lapstaffblsgm"){
    include "lapstaffblsgm.php";
  }else if($_GET["p"] == "lapstaffblsmbr"){
    include "lapstaffblsmbr.php";
  }else if($_GET["p"] == "lapstaffhapus"){
    include "lapstaffhapus.php";
  }else{
    include "home.php";
  }
?>
      </div>
    </div>
  </div>
</div>
<?php
}else{
  include "login.php";
}  
?>