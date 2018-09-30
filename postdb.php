<?php
session_start();
$conn=mysqli_connect('localhost','root','','isproject');
$msg="";
$advid=$_SESSION['advid'];
$latitude=$_POST['latitude'];
$longitude=$_POST['longitude'];
$acctype=$_POST['acctype'];
$vacancies=$_POST['vacancies'];
$target_dir="listphoto/";
$target_file=$target_dir.basename($_FILES["filetoupload"]["name"]);
$cost=$_POST['cost'];
$roomsize=$_POST['roomsize'];
$amenities=$_POST['amenities'];
$billtype=$_POST['billtype'];
$rating=0;

$sql="INSERT INTO listings(accommodationtype, vacancies, amenities, rating, Category, cost, Advid, photo, lat, lng) VALUES ('$acctype','$vacancies','$amenities','$rating','$roomsize','$cost','$advid','$target_file','$latitude','$longitude')";

mysqli_query($conn,$sql);
header('Location:dashboard.php');




if (move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_file)) {
    # code...
    $msg="Image uploaded successfully";
    
}else{
    $msg="There is a problem";
}