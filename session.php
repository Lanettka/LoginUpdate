<?php
session_start();

if(isset($_SESSION['CurrentUser'])){
	echo "Welcome " . $_SESSION['CurrentUser'] . "This is your profile";
}else
	echo"You must be logged in to see this page";
?>
