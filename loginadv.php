<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login Page|Advertiser</title>
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
        <h2>Login</h2>
        <div id="uform">
    <form method="POST" action="selectadv.php">
     
  
        Email Address :<br> <input type="text" name="mail" placeholder="Enter your email address" class="form-control"><br>        
        Password :<br> <input type="password" name="pass" placeholder="Enter your password" class="form-control"><br><br>
        
        
        <input type="submit" style="float:right; margin-right:10px;" class="btn btn-info" value="login" ><br><br>


    </form>
</div>
</div>
</center>
</body>
</html>