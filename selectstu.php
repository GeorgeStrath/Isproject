<?php

    session_start();
    include 'connect.php';

    $email=$_POST['mail'];
    $pwd=$_POST['pass'];

    $sql="SELECT password, stuid FROM student WHERE email='$email' ";

    $result=mysqli_query($conn,$sql);

if (mysqli_num_rows($result)>0) {
        # code...
 

    if ($row=mysqli_fetch_assoc($result)) {

        # code...
        $pass=$row['password'];
             
        if (password_verify($pwd,$pass)) {
            # code...
            $_SESSION['stuid']=$row['stuid'];
            $_SESSION['val']='true';   
            header('Location:stuhomepage.php');
        }
        elseif(!password_verify($pwd,$pass)){
            echo "no";
            header('Location:login.php');
            session_destroy();
            
        }
        else{
            echo "really no";
            header('Location:login.php');
            session_destroy();
            
        }

    }
     else{
            echo "string";
            header('Location:login.php');
            session_destroy();
            
        }
}
else{
    header('Location:login.php');
}

