<?php
$msg="";
$conn=mysqli_connect("localhost","root","","isproject");
$target_dir="advcert/";
$target_file=$target_dir.basename($_FILES["filetoupload"]["name"]);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mail=$_POST['mail'];
$idnum=$_POST['idnum'];
$advinfo=$_POST['advinfo'];
$photo='images/default.png';
$pwd=$_POST['pwd'];
$pass=password_hash($pwd,PASSWORD_BCRYPT);

$sql="INSERT INTO  advertiser ( firstname,  lastname,  email,  idno,  password,  certfile, advinfo, photo) VALUES ('$fname', '$lname', '$mail', '$idnum', '$pass', '$target_file','$advinfo','$photo')";

mysqli_query($conn,$sql);
if (move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_file)) {
    # code...
    $msg="Image uploaded successfully";
    
}else{
    $msg="There is a problem";
}

header('Location:login.php');


?>