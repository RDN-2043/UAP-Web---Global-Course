<?php
ob_start();
include('SqlDataTestimonials.php');
include('SqlDataCourse.php');

if(isset($_POST['btnDeleteTestimonial'])){
    RemoveTestimonials($_POST['idTestimonial']);
}
else if(isset($_POST['btnAddCourse'])){
    AddCourse($_POST['course'], $_POST['slot'], $_POST['iconLink']);
}
else if(isset($_POST['btnDeleteCourse'])){
    DeleteCourse($_POST['idCourse']);
}
else if(isset($_POST['btnUpdateSlot'])){
    UpdateSlot($_POST['idCourse'], $_POST['slot']);
}

function RemoveTestimonials($id){
    global $conn, $tableDataTestimonials;

    SqlDataTestimonials\Remove($id);

    header( "refresh:0; url=Home_Admin.html" );
}

function AddCourse($course, $slot, $iconLink){
    SqlDataCourse\Add($course, $slot, $iconLink);

    header( "refresh:0; url=Home_Admin.html" );
}

function DeleteCourse($id){
    SqlDataCourse\Remove($id);

    header( "refresh:0; url=Home_Admin.html" );
}

function UpdateSlot($id, $slot){
    $data = SqlDataCourse\SelectById($id);

    SqlDataCourse\Update($id, $data['Course'], $slot, $data['Icon Link']);

    header( "refresh:0; url=Home_Admin.html" );
}
?>