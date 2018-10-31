<?php
session_start();
 include'connect.php';
$msg="";
$advid=$_SESSION['advid'];
$latitude=$_POST['latitude'];
$location=$_POST['location'];
$longitude=$_POST['longitude'];
$acctype=$_POST['acctype'];
$vacancies=$_POST['vacancies'];
$target_dir="listphoto/";
$target_file=$target_dir.basename($_FILES["filetoupload"]["name"]);
$cost=$_POST['cost'];
$roomsize=$_POST['roomsize'];
$amenities=$_POST['amenities'];
$billtype=$_POST['billtype'];
$extrainfo=$_POST['extrainfo'];
$locationinfo=$_POST['locationinfo'];

$rating=0;

$query="SELECT * FROM advertiser WHERE advid='$advid' ";
$result=mysqli_query($conn,$query);
  if (mysqli_num_rows($result)==1) {
	# code...
	if ($row=mysqli_fetch_assoc($result)) {
		# code...
		$advfirstname=$row['firstname'];
		$advlastname=$row['lastname'];
	}

}


$sql="INSERT INTO listings(advfirstname,advlastname,accommodationtype, vacancies, amenities,amenitiesincluded , rating, Category, cost, Advid, photo, location,locationinfo, lat, lng,extrainfo) VALUES ('$advfirstname','$advlastname','$acctype','$vacancies','$amenities', '$billtype','$rating','$roomsize','$cost','$advid','$target_file','$location','$locationinfo','$latitude','$longitude','$extrainfo')";

mysqli_query($conn,$sql);
header('Location:dashboard.php');




if (move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_file)) {
    # code...
    $msg="Image uploaded successfully";
    
}else{
    $msg="There is a problem";
}