<?php
ob_start();
include('MySqlConnector.php');

abstract class LoginType{
    const Customer = 'Customer';
    const Admin = 'Admin';
}

$username = $_POST['username'];
$password = $_POST['password'];

if(isset($_POST['login'])){
    ValidateLogin();
}

function ValidateLogin(){
    global $username, $password;
    global $conn, $tableDataUser;

    $dbValue = mysqli_query($conn, "select `User Type` from `$tableDataUser` where `Username` = '$username' AND `Password` = '$password'");
    $value = mysqli_fetch_assoc($dbValue);

    LoginAs($value['User Type']);
}

function LoginAs($loginType){
    SaveData();

    if(LoginType::Customer == $loginType){
        header( "refresh:0; url=Home_Customer.html" );
    }
    else if(LoginType::Admin == $loginType){
        header( "refresh:0; url=Home_Admin.html" );
    }else{
		header("location:Login.html?pesan=gagal");
	}
}

function SaveData(){
    global $username, $password;
    global $conn, $tableDataUser;

    session_start();

    $dbValue = mysqli_query($conn, "select `ID` from `$tableDataUser` where `Username` = '$username' AND `Password` = '$password'");
    $value = mysqli_fetch_assoc($dbValue);

    $_SESSION['id'] = $value['ID'];
}
?>