<?php
namespace SqlDataTestimonials;

include('MySqlConnector.php');

function SelectAll(){
    global $conn, $tableDataTestimonials;

    return mysqli_query($conn, "select * from $tableDataTestimonials");
}

function SelectByUserId($id){
    global $conn, $tableDataTestimonials;

    $dataTestimonials = mysqli_query($conn, "select * from $tableDataTestimonials where `User ID` = $id");
    return mysqli_fetch_assoc($dataTestimonials);
}

function Add($id, $stars, $testimonials){
    global $conn, $tableDataTestimonials;

    //mysqli_query($conn, "insert into $tableDataTestimonials values('', '$id', '$stars', '$testimonials')");
    mysqli_query($conn, "insert into $tableDataTestimonials (`User ID`, `Stars`, `Testimonial`) values ('$id', '$stars', '$testimonials')");
}

function Remove($id){
    global $conn, $tableDataTestimonials;

    mysqli_query($conn, "delete from `$tableDataTestimonials` where `ID` = $id");

    echo "Data Terhapus!";
}
?>