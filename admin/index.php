<?php include "../inc/config.php"; ob_start(); ?>
<?php session_start(); ?>
<link rel="stylesheet" type="text/css" href="css/login.css">
<?php 

if (isset($_POST['login'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];

	$query = "SELECT * FROM admin WHERE username = '$username'";
	$select_user = mysqli_query($con,$query);

	if (!$select_user) {
		die("Query Failed" . mysqli_error($con));
	}

	while ($row = mysqli_fetch_assoc($select_user)) {
		$id = $row['id'];
		$username = $row['username'];
		$password = $row['password'];
		

		if($username === $username && $password === $password) {

			$_SESSION['s_username'] = $username;
			$_SESSION['s_id'] = $dbid;
			header("Location:main.php");
			exit;
		}
	}

}
?>

<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Admin Panel  </h2>

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images/admin.png" id="icon" alt="Admin Icon" />
    </div>

    <!-- Login Form -->
    <form action="index.php" method="post">
      <input type="text" id="login" class="fadeIn second" name="username" placeholder="login">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="login" value="Log In">
    </form>

  

  </div>
</div>
