<?php
namespace SqlDataUser;

include('MySqlConnector.php');

function SelectAll(){
    global $conn, $tableDataUser;

    return mysqli_query($conn, "select * from $tableDataUser");
}

function SelectById($id){
    global $conn, $tableDataUser;

    $dataUser = mysqli_query($conn, "select * from $tableDataUser where `ID` = $id");
    return mysqli_fetch_assoc($dataUser);
}

function Add($username, $password, $userType){
    global $conn, $tableDataUser;

    //mysqli_query($conn, "insert into $tableDataUser values('', '$username', '$password', '$userType')");
    mysqli_query($conn, "insert into $tableDataUser (`Username`, `Password`, `User Type`) values ('$username', '$password', '$userType')");

    echo "Berhasil daftar!";
}
?>