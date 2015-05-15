<?php
session_start();
?>
<html>
<body>
	<a href = 'session.php'>Click Here for your Profile</a>	
	<br/>
	<a href = 'login.php?logout=1'>Click here to Logout</a> 
<?php
$dbName ="Lanett";
$dbPass ="12345";

$requestLogout = isset($_GET['logout']);
$requestLogin = isset($_POST['submit']);

function login($userName){
	$_SESSION['CurrentUser'] = $userName;
	$_SESSION['CurrentAcessLevel'] = 5;
	echo "Welcome back, " . $userName;
}

function logout(){
	session_unset();
	session_destroy();
	echo "you are logged out";
}
if($requestLogout){
	logout();
}
if($requestLogin){
	
	$user = $_POST['user'];
	$pass = $_POST['pass'];
if($user == $dbName ){
	if($pass == $dbPass){
		login($user);
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


