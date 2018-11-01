<?php
 include 'connect.php';
 include 'linkstyles.php';
 session_start();
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
	
</head>
<body>  
    <div class="container-fluid">
    
	   <nav class="navbar navbar-expand-md bg-light navbar-light fixed-top">
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

    
    ";

    ?>
    <br><br>
    </div>

        <div class="text-center" style="font-size: 22px;">Update advertisement information</div>
        <hr>

    <!-- Nav pills -->
  <ul class="nav nav-pills text-center nav-fill" role="tablist">
    <li class="nav-item">
      <a class="nav-link active" data-toggle="pill" href="#home">Bookings</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu1">Contacts</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" data-toggle="pill" href="#menu2">Comments</a>
    </li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div id="home" class="container tab-pane active"><br>      
      <?php
        $advertiser=$_SESSION['advid'];
        $sql="SELECT * FROM bookings WHERE listid='$id' AND  advid=$advertiser ";
        $res=mysqli_query($conn,$sql);
        if (mysqli_num_rows($res)>0) {
            # code...
            while ($data=mysqli_fetch_assoc($res)) {
                # code...
                echo $data['acceptance'];
                
                
            }
        }
        elseif(mysqli_num_rows($res)<=0)
        {
            echo "<div class='text-center' style='font-size:20px;' >We are running a little dry</div><br><br><br>";
        }
      ?>
    </div>
    <div id="menu1" class="container tab-pane fade"><br>
      <h3>Menu 1</h3>
      <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
    </div>
    <div id="menu2" class="container tab-pane fade"><br>
      <h3>Menu 2</h3>
      <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
    </div>
  </div>
    
 

</div>

</body>
</html>






