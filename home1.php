<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['user_name'])) {
	
?>
<!DOCTYPE html>
<html>
<head>
<title>Prime Commercial Bank Ltd.</title>
<link rel="style1sheet" type="text/css" href="style1.css"
	<h1>Digital Banking Department</h1>
	
</head>
<body>
<div class"Memu-bar">
<a>Home</a>
<a>Internal Memo</a>
	<a Hello, <?php echo $_SESSION['name'];  ?></a>
	<a href="logout.php">Logout</a>
	
	</div>
</body>
</html>

<?php
}else{
	header("Location: index.php");
		exit();	
}
?>