<?php
ob_start();
include('SqlDataUser.php');

$username = $_POST['username'];
$password = $_POST['password'];
$type = $_POST['type'];

SqlDataUser\Add($username, $password, $type);

header( "refresh:1; url=SignIn.html" );
?>