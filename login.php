<?php
session_start();

include 'dbh.php';

$username = mysqli_real_escape_string($conn, $_POST['uname']);
$password = mysqli_real_escape_string($conn, $_POST['psw']);

$sql = "SELECT * FROM profile WHERE nick='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);

if (!$row = mysqli_fetch_assoc($result)){
	$_SESSION['button_gedrueckt'] = true;
}
else{
	$_SESSION['id'] = $row['u_id'];
	$_SESSION['nick'] = $row['uid'];
	$_SESSION['level'] = $row['level'];
	$_SESSION['raid_lead'] = $row['raid_lead'];
	$_SESSION['class'] = $row['class'];
    $_SESSION['role'] = $row['role'];
    $_SESSION['guild'] = $row['guild'];
    $_SESSION['guild_intern'] = $row['guild_intern'];
    $_SESSION['raid_cd_ony'] = $row['raid_cd_ony'];

	$_SESSION['login_tester'] = true;
    
    /*
	if ($row['score'] >= 50){
		$update = "UPDATE profile
		SET ach_1=1
		WHERE uid='$username';";
		mysqli_query($conn, $update);
	}
	if ($row['score'] >= 100){
		$update = "UPDATE profile
		SET ach_1=1, ach_2=1
		WHERE uid='$username';";
		mysqli_query($conn, $update);
	}
	if ($row['score'] >= 150){
		$update = "UPDATE profile
		SET ach_1=1, ach_2=1, ach_3=1
		WHERE uid='$username';";
		mysqli_query($conn, $update);
	}
	
	$_SESSION['ach_1'] = $row['ach_1'];
	$_SESSION['ach_2'] = $row['ach_2'];
	$_SESSION['ach_3'] = $row['ach_3'];
	$_SESSION['ach_4'] = $row['ach_4'];
	$_SESSION['ach_5'] = $row['ach_5'];
    $_SESSION['ach_6'] = $row['ach_6'];
    */
	}


header("Location: index.php");