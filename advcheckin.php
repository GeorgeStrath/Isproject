<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Sign up Page|Advertiser</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css">
    <style>
    input{
        border-radius: 5px;
    }
    #sform{
        margin-top: 120px;
        margin-bottom: 120px;
        margin-right:450px;
        margin-left:450px; 
        box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);   
    }
    #uform{
        margin: 30px;
    }
    </style>
    
</head>

<body>
    <center>
<div id="sform">
        <h2>Sign Up</h2>
        <div id="uform">
    <form method="POST" action="signupadv.php" enctype="multipart/form-data">
     
        Firstname :<br> <input type="text"  name="fname" placeholder="Enter your firstname" class="form-control" ><br><br>
        Lastname :<br> <input type="text" name="lname" placeholder="Enter your lastname" class="form-control"><br><br>
        Email Address :<br> <input type="text" name="mail" placeholder="Enter your email address" class="form-control"><br><br>
        ID Number :<br> <input type="number" name="idnum" placeholder="Enter  your id number" class="form-control" ><br><br>
        Password :<br> <input type="password" name="pwd" placeholder="Enter your password" class="form-control"><br><br>
        
        Re-type Password :<br> <input type="password" placeholder="Retype your password" name="pass" class="form-control" ><br><br>

        Say something about yourself:<br> <textarea  placeholder="" name="advinfo" class="form-control" ></textarea><br>
        Certificate file : <input type="file" name="filetoupload" id="filetoupload" ><br>
        <input type="submit" style="float:right; margin-right:10px;" class="btn btn-info" value="Sign Up" name="submit"><br><br>
        Already have an account <a href="login.php">Login </a>

    </form>
</div>
</div>
</center>
</body>
</html>