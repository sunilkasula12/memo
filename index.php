<!DOCTYPE html>
<html>
<head>
<title>Prime Commercial Bank Ltd.</title>
<link rel="stylesheet" type="text/css" href="style.css"
</head>
<body>
	
<div class="image">
<img class="image" src="image/prime_logo.jpg" alt="PCBL Logo">
</div>
	
	<form class="form" action="login.php" method="post">
	
	<label class="login">LOGIN</label><br><br>
	<?php if (isset($_GET['error'])) { ?>
		<p class="error"><?php echo $_GET['error']; ?></p>
	<?php } ?>
	<label class="label">User Name</label>
	<input class="input" type="text" name="uname" placeholder="User Name">
	
	<label class="label">Password</label>
	<input  class="input" type="password" name="password" placeholder="Password">
	
	<button class="submit" type="submit">Login</button>
	</form>
	
	
</body>
</html>