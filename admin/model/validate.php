<?php

include_once("..". DIRECTORY_SEPARATOR ."..". DIRECTORY_SEPARATOR ."model". DIRECTORY_SEPARATOR ."database.php");

session_start([
	'cookie_lifetime' => 3200, // 60 minutes
]);
function test_input($data) {
	
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	$username = test_input($_POST["username"]);
	$password = test_input($_POST["password"]);
	$stmt = $db->prepare("SELECT * FROM admin");
	$stmt->execute();
	$users = $stmt->fetchAll();
	
	foreach($users as $user) {
		
		if(($user['username'] == $username) && 
			($user['password'] == $password)) {
				$_SESSION['adminLoggedIn'] = true;
				header("location: ../adminpage.php");
		}
		else {
			$_SESSION['adminLoggedIn'] = false;
			echo "<script language='javascript'>";
			echo "alert('WRONG INFORMATION');\n";
			echo "setTimeout(() => { window.location.href = 'http://localhost/admin' }, 5000)";
			echo "</script>";
			echo "Redirecting in 5 seconds...";
			die();
		}
	}
}
