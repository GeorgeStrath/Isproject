<?php

$conn=mysqli_connect("localhost","root","","isproject");
$target_dir="stuadle/";
$target_file=$target_dir.basename($_FILES["filetoupload"]["name"]);

$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mail=$_POST['mail'];
$idnum=$_POST['idnum'];
$pwd=$_POST['pass'];
$pass=password_hash($pwd,PASSWORD_DEFAULT);

$sql="INSERT INTO  student ( firstname,  lastname,  email,  idno,  password,  admissionletter) VALUES ('$fname', '$lname', '$mail', '$idnum', '$pass', '$target_file')";

mysqli_query($conn,$sql);

if (move_uploaded_file($_FILES['filetoupload']['tmp_name'],$target_file)) {
    # code...
    $msg="Image uploaded successfully";
    
}else{
    $msg="There is a problem";
}

header('Location:stuhomepage.php');



?>