<?php
	session_start([
		'cookie_lifetime' => 3200, // 60 minutes
	]);
	if (isset($_SESSION['adminLoggedIn']) && $_SESSION['adminLoggedIn'] == true) {
		header("Location: adminpage.php");
		die();
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<?php include "..". DIRECTORY_SEPARATOR ."includes". DIRECTORY_SEPARATOR ."cdnlinks.php" ?>
	<link rel="stylesheet" href="styles/login.css">
	<title>Login Page</title>
</head>

<body>
	<form action="model/validate.php" method="post">
		<div class="login-box">
			<h1>Login</h1>

			<div class="textbox">
				<i class="bi bi-person-fill" aria-hidden="true"></i>
				<input type="text" placeholder="Username"
						name="username" value="">
			</div>

			<div class="textbox">
				<i class="bi bi-lock-fill" aria-hidden="true"></i>
				<input type="password" placeholder="Password"
						name="password" value="">
			</div>

			<input class="button" type="submit"
					name="login" value="Sign In">
		</div>
	</form>
</body>

</html>
