<?php
$servername = "localhost";
$username = "id19006708_gcourse";
$password = "Uapwebglobalcourse_12";
$database = "id19006708_globalcourse";
/*$servername = "localhost";
$username = "root";
$password = "";
$database = "id19006708_gcourse";*/

$tableDataUser = "data_user";
$tableDataTestimonials = "data_testimonials";
$tableDataCourse = "data_course";
/*$tableDataUser = "data_user";
$tableDataTestimonials = "data_testimonials";
$tableDataCourse = "data_course";*/

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
?>