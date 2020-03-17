<?php 
session_start();

include 'dbh.php';

$username = $_POST['nick'];
$password = $_POST['password'];
$guild = $_POST['guild'];
$level = $_POST['level'];
$role = $_POST['role'];
$class = $_POST['class'];


$sql = "SELECT nick FROM user WHERE nick='$username'";
$result = mysqli_query($conn, $sql);
$usernamecheck = mysqli_num_rows($result); 

if ($usernamecheck > 0){
    header("Location: gildenliste.php?error=username");
    exit();
}
else{
$sql = "INSERT INTO user (rank, nick, password, raid_lead, class, level, role, guild, guild_intern, unlock_id) VALUES (0, '$username', '$password', 0, '$class', '$level', '$role', '$guild', 0, 'FA556')";

$result = mysqli_query($conn, $sql);

header("Location: gildenliste.php");
}