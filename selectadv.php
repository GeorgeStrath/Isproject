<?php
session_start();
include 'connect.php';
$mail=$_POST['mail'];
$pwd=$_POST['pass'];

$sql="SELECT password,advid FROM advertiser WHERE email='$mail' ";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)==1)
{
    if ($row=mysqli_fetch_assoc($result)) {
        # code...
        $row0=$row['password'];
        $row1=$row['advid'];
        

        if(password_verify($pwd,$row0))
        {
            $_SESSION['advid']=$row1;
            $_SESSION['user']=$mail;
            $_SESSION['val']='true';
            header('Location:dashboard.php');
        }
        elseif(!password_verify($pwd,$row0))
        {   header('Location:login.php');
            session_destroy();            
            
        }
        else{
            header('Location:login.php');
            session_destroy();   
        }

    }
}
else{
    header('Location:login.php');
}

