<?php 
session_start();
include 'connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$escape_username = mysqli_real_escape_string($connection, $username); 
$escape_password = mysqli_real_escape_string($connection, $password);


// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($connection,"SELECT * FROM user WHERE username='".$escape_username."' AND password='".$escape_password."'");
$cek = mysqli_num_rows($login); 

// cek apakah username dan password di temukan pada database
if(! empty($cek)){
	$cek = mysqli_fetch_assoc($login);
	if($cek['type']=="admin"){
		$_SESSION['username'] = $username;
		$_SESSION['type'] = "admin";
		header("location:Home.php");
	}else if($cek['type']=="member1"){
		$_SESSION['username'] = $username;
		$_SESSION['type'] = "member1";
		header("location:Home.php");
	}else if($cek['type']=="member2"){
		$_SESSION['username'] = $username;
		$_SESSION['type'] = "member2";
		header("location:Home.php");

	}else{
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>