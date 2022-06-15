<?php
namespace SqlDataCourse;

include('MySqlConnector.php');

function SelectAll(){
    global $conn, $tableDataCourse;

    return mysqli_query($conn, "select * from $tableDataCourse");
}

function SelectById($id){
    global $conn, $tableDataCourse;

    $dataCourse = mysqli_query($conn, "select * from $tableDataCourse where `ID` = $id");
    return mysqli_fetch_assoc($dataCourse);
}

function Add($course, $slot, $iconSlot){
    global $conn, $tableDataCourse;

    //mysqli_query($conn, "insert into $tableDataCourse values('', '$course', '$slot', '$iconSlot')");
    mysqli_query($conn, "insert into $tableDataCourse (`Course`, `Slot`, `Icon Link`) values ('$course', '$slot', '$iconSlot')");
}

function Remove($id){
    global $conn, $tableDataCourse;

    mysqli_query($conn, "delete from `$tableDataCourse` where `ID` = $id");

    echo "Data Terhapus!";
}

function Update($targetId, $course, $slot, $iconLink){
    global $conn, $tableDataCourse;

    mysqli_query($conn, "update $tableDataCourse set `Course` = '$course', `Slot` = '$slot', `Icon Link` = '$iconLink' where `ID` = '$targetId'");

    echo "Data Terupdate!";
}
?>