<?php
	require_once('phpscripts/config.php');
	confirm_logged_in();
?>
<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="../css/admin_index.css">
</head>
<body>
	<section id="accountContainer">
  <h1>Welcome to your account</h1>
  <?php echo "<p>User: {$_SESSION['user_name']}</p>";?>
</section>
	<a href="admin_createuser.php">Create user</a>
	<a href="phpscripts/caller.php?caller_id=logout">Sign Out</a>
</body>
</html>
