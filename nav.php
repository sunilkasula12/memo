<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
	
?>

<?php
include  "db_conn.php";


?>

<!DOCTYPE html>
<html>
<head>
<title>Prime Commercial Bank Ltd.</title>

<link rel="stylesheet" type="text/css" href="style.css">



</head>
<body>

 <h3><span class="view">Digital Banking Department </span>
<span class="view1"><?php echo strtoupper( "Welcome ".$_SESSION['name']);  ?></span></h3>


<div class="navbar">
<a class="abc" href="home.php">Home</a>

<div class="dropdown">
  <buttona class="dropbtn" href="">Internal Memo</button>
  <div class="dropdown-content">
  <a class="" href="Internal Memo.php">Request Internal Memo</a>
  <a class="" href="page1.php">Page 2</a>	
  </div>
</div>

<a class="abc" href="page1.php">Page 1</a>

<a class="abc" href="page2.php">Page 2</a>

<a class="abcd" href="logout.php">Logout</a>
</div>
</body>
</html>

<?php
}else{
	header("Location: index.php");
		exit();	
}
?>