<?php
    session_start();
	include ("config.php");

	$username = $_POST['username'];
	$password = md5($_POST['password']);

    $username = stripcslashes($username);
    $password = stripcslashes($password);
    $username = mysqli_real_escape_string($mysqli,$username);
    $password = mysqli_real_escape_string($mysqli,$password);

	$login = mysqli_query($mysqli,"select * from admin where username='$username' and password='$password'" );
	$cek = mysqli_num_rows($login);
    if($cek > 0){
        $data = mysqli_fetch_array($login);
        $_SESSION['username'] = $username;
	    $_SESSION['status'] = "login";
        header("location:adminindex.php");
    }
    else{
        header("location:loginindex.php");
    }
	
?>