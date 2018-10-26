<?php 
session_start();
$conn=mysqli_connect("localhost","root","","isproject");
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery-3.3.1.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
        <style>
            #cardsty{
                margin-left: 15px;
                margin-top: 50px;
                width: 310px;            
                
            }
            body{
                text-align: center;
            }         
            
        </style>
</head>
<body>
    <div class="container-fluid">
        
   
    <br>
    <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" style="color: gray;">Rental House Tracker </a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
           <span class="navbar-toggler-icon"></span>
         </button>
       <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">

            <li class="nav-item dropdown" style="margin-left: 950px;">

                <a class="nav-link dropdown-toggle" href="#" id="navbardrop"   data-toggle="dropdown">
                     Tools
                </a>
                    <div class="dropdown-menu bg-light" >
                        <a class="dropdown-item" href="postlisting.php">Post</a>                        
                    </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="signout.php" i class="fa fa-sign-out"> Sign out</i>                
            </a>
            </li>
            

        </ul>
      </div>
    </nav><br><br>
    <h5 class="text-center">Click on any image to update the listings profile</h5>
    <?php 

$advid=$_SESSION['advid'];
$sql="SELECT * FROM listings WHERE advid='$advid'" ;
$result=mysqli_query($conn,$sql);

 echo "<div class='card-columns'>";

if(mysqli_num_rows($result)>0 )
{
    while($rows=mysqli_fetch_assoc($result))
 {
   
    $photopath=$rows['photo'];  
    $listid=$rows['listid']; 
    $location=$rows['location'];

      echo "
        
        <div class='card bg-light w-75'>
                <div class='card-body text-center'>
             <p class='card-text'>
                <a href='listing.php?title=".$listid."'>            
                    
                    <img src=' ".$photopath."' width='250px' height='100px' ><br>                    
                </a>  
             </p>
            </div>
            <div clas='card-footer'>
                <p class='card-text'><h3>".$location."</h3></p>
            </div>
        </div>
        

    ";
     
 }


 }       
    echo "</div>"; 
   
?>


</div>
</body>
</html>