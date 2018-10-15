<?php
session_start();
$conn=mysqli_connect('localhost','root','','isproject');
$mail=$_POST['mail'];
$pwd=$_POST['pass'];

$sql="SELECT password,advid FROM advertiser WHERE email='$mail' ";

$result=mysqli_query($conn,$sql);

if(mysqli_num_rows($result)>0)
{
    if ($row=mysqli_fetch_assoc($result)) {
        # code...
        $row0=$row['password'];
        $row1=$row['advid'];
        $check=password_verify($pwd,$row0);

        if($check==1)
        {
            $_SESSION['advid']=$row1;
            $_SESSION['user']=$mail;
            header('Location:dashboard.php');
        }
        else
        {   header('Location:login.php');
            session_destroy();            
            
        }

    }
}
else
{
    header('Location:loginadv.php');
    session_destroy();
}

