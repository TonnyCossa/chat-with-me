<?php 
	
	// $conn = mysqli_connect("fdb1028.awardspace.net", "4312816_chat", "#M+1.Cqb6fZI-XuP", "4312816_chat");
	
	// //$conn = mysqli_connect("localhost", "chat", "", "root");
	// if(!$conn){
	// 	echo "Database connected" .mysqli_error();
	// }

	$conn = mysqli_connect("localhost", "root", "", "chat");
	 if(!$conn) {
	 	die ("Unnable to connect to MySQL: " . mysqli_connect_error());
	 }
	

	//require_once 'config.php';
	//$conn = mysqli_connect("localhost", "root", "");

	//if($conn) die("Unnable to connect to MySQL: " . mysqli_error());