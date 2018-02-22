<?php
	require_once('phpscripts/config.php');
	$ip = $_SERVER['REMOTE_ADDR'];
	//echo $ip;
	if(isset($_POST['submit'])){
		//echo "Works";
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		if($username !== "" && $password !== ""){
			$result = logIn($username, $password, $ip);
			$message = $result;
		}else{
			$message = "Please fill out the required fields.";
		}
	}
?>

<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>CMS Portal Login</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="../css/admin_login.css">
</head>
<body>
  <section id="container">
  <h1>Welcome Back!</h1>
  <?php if(!empty($message)){echo $message;}  ?>
  <form action="admin_login.php" method="post">
    <label>Username: </label>
    <input type="text" name="username" value="">
    <br>
    <label>Password: </label>
    <input type="text" name="password" value="" id="loginInput">
    <br>
    <button type="submit" name="submit" value="Login" id="submitBtn">Login</button>
  </form>
  </section>
</body>
</html>
