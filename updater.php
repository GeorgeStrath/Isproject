<?php
include 'connect.php';


$id=mysqli_real_escape_string($conn,$_GET['title']);
$photo=mysqli_real_escape_string($conn,$_GET['photo']);
$actype=$_POST['actype'];
$vacancies=$_POST['vacancies'];
$cost=$_POST['cost'];
$amenities=$_POST['amenities'];
$filename=$_FILES['filetoupload']['name'];

	

if (!$filename) {
	# code...
	$filename=$photo;	

}
$target_dir="listphoto/";
$target_file=$target_dir.basename($filename);



$sql="UPDATE listings SET accommodationtype='$actype' ,vacancies='$vacancies' ,cost='$cost' ,amenities='$amenities' ,photo='$target_file' WHERE listid='$id' ";


mysqli_query($conn,$sql);
if (move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_file)) {
    # code...
    $msg="Image uploaded successfully";
    
}else{
    $msg="There is a problem";
}

header('Location:dashboard.php');


