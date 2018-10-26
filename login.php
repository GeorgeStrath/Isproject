<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <?php include 'linkstyles.php'; ?>
    <style>
        #stud{
        margin-top: 120px;
        margin-bottom: 120px;
        margin-left: 100px;
        margin-right: 320px;        
        box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3); 
        border-right: 2px solid black;
        border-bottom: 2px solid black;
        }
        #stud2{
         margin-top: 120px;
        margin-bottom: 120px;
        margin-right: 150px;        
        box-shadow: 0 4px 10px 4px rgba(19, 35, 47, 0.3);
        border-left: 2px solid black;
        border-bottom: 2px solid black;
        }
    </style>
</head>
<body>
    <div class="container-fluid">
        <nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="homepage.html"><i class="far fa-arrow-alt-circle-left "></i> Back</a>
    </li>
   
  </ul>

</nav>

    <div class="row">
        <div class="col" id="stud">
                <form method="POST" action="selectstu.php">
     
                        <h3>Students</h3>
                        Email Address :<br> <input type="text" name="mail" placeholder="Enter your email address" class="form-control"><br>                        
                        Password :<br> <input type="password" name="pass" placeholder="Enter your password" class="form-control"><br><br>
                        
                        
                        <input type="submit" style="float:right; margin-right:10px;" class="btn btn-info" value="login" ><br><br>
                        Don't have an account?<a href="stucheckin.php"> Sign up</a>
                
                    </form>
        </div>

        <div class="col" id="stud2" >
                <form method="POST" action="selectadv.php">     
                            <h3>Advertiser</h3>
                        Email Address :<br> <input type="text" name="mail" placeholder="Enter your email address" class="form-control">
                        <br>                        
                        Password :<br> <input type="password" name="pass" placeholder="Enter your password" class="form-control">
                        <br><br>                        
                        
                        <input type="submit" style="float:right;" class="btn btn-info" value="login" ><br><br>
                        Don't have an account?<a href="advcheckin.php"> Sign up</a>
                
                    </form>
        </div>
    </div>
    </div>
</body>
</html>