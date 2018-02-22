<?php
  ini_set('display_errors', 1);
  error_reporting(E_ALL);

	require_once('phpscripts/config.php');
	//confirm_logged_in();
  if(isset($_POST['submit'])) {
    $fname = trim($_POST['fname']);
    $username = trim($_POST['username']);
    //$password = trim($_POST['password']);
    $password = md5(rand(0,1000));
    $email = trim($_POST['email']);
    $user1v1 = $_POST['user1v1'];
    $to = $email;
    $subject = 'Signup';
    $message = '
    Thanks for signing up!
    Your account has been created, This is your Username and Password.
    Username: '.$username.'
    Password: '.$password.'

    Please click this link to login your account:
    http://localhost:8888/jia_q_3014_r2/admin/admin_login.php
    ';
    $headers = 'Welcome to Your Account' . "\r\n"; // Set from headers

    mail($to, $subject, $message, $headers);


    if(empty($user1v1)) {
      $message = "Please select a user level.";
    }else{
      $result = createUser($fname, $username, $password, $email, $user1v1);
      $message = $result;
    }
  }
?>


<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>Welcome to your admin panel</title>
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">
<link rel="stylesheet" href="../css/admin_createuser.css">
</head>
<body>
  <section>
	<h1>Create Your Account</h1>
  <?php if(!empty($message)){echo $message;}?>
  <form action="admin_createuser.php" method="post">
    <label>First name:</label>
    <input type="text" name="fname" value="<?php if(!empty($fname)){echo $fname;}?>"><br><br>
    <label>Username:</label>
    <input type="text" name="username" value="<?php if(!empty($username)){echo $username;}?>"><br><br>
    <label>Password:</label>
    <input type="text" name="password" value="The password will generate by system"><br><br>
    <label>Email:&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
    <input type="text" name="email" value="<?php if(!empty($email)){echo $email;}?>"><br><br>
    <label>User Level:</label>
    <select name="user1v1">
      <option value="">Please select a user level</option>
      <option value="2">Web Admin</option>
      <option value="1">Web Master</option>
    </select><br><br>
    <button type="submit" name="submit" value="Create User" id="submitBtn">Login</button>
  </form>
</section>
</body>
</html>
