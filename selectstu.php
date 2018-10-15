<?php

    session_start();
    $conn=mysqli_connect('localhost','root','','isproject');

    $email=$_POST['mail'];
    $pwd=$_POST['pass'];

    $sql="SELECT password, stuid FROM student WHERE email='$email' ";

    $result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
        # code...
 

    if ($row=mysqli_fetch_assoc($result)) {

        # code...
        $pass=$row['password'];
        $_SESSION['stuid']=$row['stuid'];
        echo $row['stuid'].$pwd;
        if (password_verify($pwd,$pass)) {
            # code...
            header('Location:stuhomepage.php');
        }
        else{
            session_destroy();
            echo'lol';
        }
    }
}

