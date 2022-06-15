<?php
session_start();
ob_start();
include('SqlDataTestimonials.php');
include('SqlDataCourse.php');

if(isset($_POST['submitTestimonials'])){
    AddTestimonial($_SESSION['id'], $_POST['stars'], $_POST['testimonials']);
}
else if(isset($_POST['btnJoin'])){
    JoinCourse($_POST['idCourse']);
}

function AddTestimonial($id, $stars, $testimonials){
    if($testimonials != ""){
        SqlDataTestimonials\Add($id, $stars, $testimonials);
    }

    header( "refresh:0; url=Home_Customer.html" );
}

function JoinCourse($id){
    $data = SqlDataCourse\SelectById($id);

    SqlDataCourse\Update($id, $data['Course'], $data['Slot'] - 1, $data['Icon Link']);

    header( "refresh:0; url=Home_Customer.html" );
}
?>