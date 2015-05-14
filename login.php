<?php
session_start();
?>
<html>
<body>
	<a href='session.php'>Click Here for your Profile</a>	
<?php
$dbName ="Lanett";
$dbPass ="12345";

if(isset($_POST['submit'])){
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
if($user == $dbName ){
	if($pass == $dbPass){
		$_SESSION['CurrentUser'] = $user;
		echo "Welcome back, " . $user;
	}
	else{
		Mess("Wrong password!");
	}
}
else{
	Mess("Username not found!");
	}
}
else{
	Mess("Please enter your username and password!");
}

function Mess($message){
	include'form.php';
	echo $message;
}
?>
</body>
</html>


