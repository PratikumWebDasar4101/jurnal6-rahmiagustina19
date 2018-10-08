<?php

session_start();



$user = array(

		"nama" => "Administrator",

		"username" => "admin",

		"password" => 123

		); 



if ($_POST["username"] == $user["username"] && $_POST["password"] == $user["password"]) {

	$_SESSION["username"] = $_POST["username"];

	$_SESSION["password"] = $_POST["password"];

	header("Location: form.php");

}else {

	echo "gagal login";

}

?>