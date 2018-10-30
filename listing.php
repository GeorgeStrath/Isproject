<?php
 include 'connect.php';

 	$id=mysqli_real_escape_string($conn,$_GET['title']);
 	$sql="SELECT * FROM listings WHERE listid='$id' ";
 	$result=mysqli_query($conn,$sql);

 	if (mysqli_num_rows($result)>0) {
 		# code...
 		if ($rows=mysqli_fetch_assoc($result)) {
 			# code...
 			$accommodationtype=$rows['accommodationtype'];
 			$vacancies=$rows['vacancies'];
 			$amenities=$rows['amenities'];
 			$cost=$rows['cost'];
 			$photo=$rows['photo'];
 			$amenitiesincluded=$rows['amenitiesincluded'];

 			
 		}
 	}

    ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="jquery-3.3.1.js"></script>
    <script src="bootstrap-4.1.3-dist/js/bootstrap.min.js"></script>
    <!--  -->
</head>
<body>
	   <nav class="navbar navbar-expand-md bg-dark navbar-dark fixed-top">
        <a class="navbar-brand" href="dashboard.php" style="font-size: 18px; color: gray;">Rental House Tracker </a>

         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
           <span class="navbar-toggler-icon"></span>
         </button>  
         <!-- Collapsible button -->

       <div class="collapse navbar-collapse" id="collapsibleNavbar">
        <ul class="navbar-nav">
           
            <li class="nav-item dropdown" style="margin-left: 950px;">

                <a class="nav-link dropdown-toggle" href="#" id="navbardrop"   data-toggle="dropdown">
                     Tools
                </a>
                    <div class="dropdown-menu bg-light" >
                        <a class="dropdown-item" href="postlisting.php">Post</a>
                        <a class="dropdown-item" href="#">Link 2</a>
                        <a class="dropdown-item" href="#">Link 3</a>
                    </div>
            </li>

            <li class="nav-item">
                <a class="nav-link" href="signout.php" i class="fa fa-sign-out"> Sign out</i>                
            </a>
            </li>

        </ul>
      </div>
    </nav><br><br><br>
    <div class="container">
    	<?php
    	echo "

    <form method='POST'  action='updater.php?title=".$id."&photo=".$photo."' enctype='multipart/form-data'>	
    	Accommodation type: <br>
    	<input type='text' placeholder='Enter the accommodation type' class='form-control' name='actype' 
    	value='".$accommodationtype."'>
    	Vacancies: <br>
    	<input type='number' placeholder='Enter the number of vacancies' class='form-control' name='vacancies' value='".$vacancies."'>
    	Cost: <br>
    	<input type='text' placeholder='Enter the new cost' class='form-control' name='cost' value='".$cost."'>

    	<label for='comment'>Amenities provided:</label>
        <input type='text' class='form-control'  placeholder='List the ammenities provided' name='amenities' value='".$amenities."'><br>    
  
        
        <img src='".$photo."' width='250px' height='100px' ><br>
        Choose a photo<br> <input type='file' name='filetoupload' id='filetoupload'>
        <br><br>
        <input type='submit' value='Update' class='btn btn-outline-success btn-lg' style='float:right;'>
    </form>

    </div>
    ";

    ?>
</body>
</html>






