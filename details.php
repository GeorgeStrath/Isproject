<?php 
	include 'connect.php';
	include 'linkstyles.php';
$id=mysqli_real_escape_string($conn,$_GET['id']);



	$sql="SELECT * FROM listings WHERE listid='$id' ";
	$result=mysqli_query($conn,$sql);
	if (mysqli_num_rows($result)>0) {
		# code...
		if ($row=mysqli_fetch_assoc($result)) { 
			# code...
			
						?>
						


<!DOCTYPE html>
<html>
  <head>
    <style>
       /* Set the size of the div element that contains the map */
      #map {
        height: 250px;  /* The height is 400 pixels */
        width: 100%;  /* The width is the width of the web page */
        
       }
       #heading{
       	border-bottom: 7px solid black;
       	margin-left:20px; 
       	margin-right:20px;
       }
       #loca{
       	overflow: hidden;
       	height: 500px;
       	       }
       #loca:hover{
       	overflow-y: auto;
       }
       #heading2{
       	font-size: 23px;
       	margin-left:90px; 
       	margin-right:90px;
       	text-align: center;
       	border-bottom: 1px solid black;
       	}
       	#heading2:hover{
       	
       	}
       	#heading3{
       		font-size: 20px;
       	}

    </style>
  </head>
  <body>
     		<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="stuhomepage.php"><i class="far fa-arrow-alt-circle-left "></i> Back Home</a>
    </li>
      <form class="form-inline" method="POST" action="search.php" style="margin-left: 850px;">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="location" autofcus>
    <button class="btn btn-outline-success" type="submit">Search</button>
   </form>
   
  </ul>

</nav>
<br><br><br><br>
<div class="container-fluid">
<div class="row" >
	 <!-- Location Information -->
	<div class="col-4" id="loc" >
		<div class="text-center" style="font-size:23px; " id="heading">Location Information </div><br>
	<div class="text-center" style="font-size:20px; ">Where am I located? <i class="fas fa-map-marked"></i></div>
    <!--The div element for the map -->
    
    <div id="map"></div>
    <script>
 	var lati=parseFloat('<?php echo $row['lat'];?>');
   	var long=parseFloat('<?php echo $row['lng'];?>');

// Initialize and add the map
function initMap() {

  // The location of Uluru
  
  var uluru = {lat: lati, lng: long};
  // The map, centered at Uluru
  var map = new google.maps.Map(
      document.getElementById('map'), {zoom: 15, center: uluru});
  // The marker, positioned at Uluru
  var marker = new google.maps.Marker({position: uluru, map: map});
}
    </script>
    <!--Load the API from the specified URL
    * The async attribute allows the browser to render the page while the API loads
    * The key parameter will contain your own API key (which is not needed for this tutorial)
    * The callback parameter executes the initMap() function
    -->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSb5YDW2rNo4ZNmj5QC44QfIeetujfQgM&callback=initMap">
    </script>
    
    <br>


<div id="heading2">Property Location</div><br>
	<div id="heading3" class="text-center"><?php echo $row['location'];?></div>

<br>
<div id="heading2">About the location.</div><br>
<div id="heading3" class="text-center"><?php echo $row['locationinfo'];?></div>






 </div>
 	<div class="col-8" id="loc">
 		<div class="text-center" style="font-size:23px; " id="heading"> Information </div>
 		<div  class="text-center" style="font-size: 20px;">Image.</div><br>
		<img src="<?php echo $row['photo'];?>" style="margin-left: 200px; border-radius:7px; " width="500px"><br>
 		<div id="heading2">Accommodation Type.</div><br>
		<div id="heading3" class="text-center"><?php echo $row['accommodationtype'];?></div>
		<div id="heading2">Room Size.</div><br>
		<div id="heading3" class="text-center"><?php echo $row['Category'];?> room</div>
		<div id="heading2">Amenities provided.</div><br>
		<div id="heading3" class="text-center"><?php echo $row['amenities'];?></div>
		<div id="heading2">Cost.</div><br>
		<div id="heading3" class="text-center"><?php echo $row['cost'];?> Ksh</div><br>
		<div class="text-center" style="font-size: 20px;">Rating.
		<?php


 				  	 			 $rate=$row['rating'];
 				  	 			 if ($rate<=0) {
 				  	 			 	# code...
 				  	 			 	echo "<i class='far fa-star'></i> 	";
 				  	 			 }
 				  	 			 elseif ($rate<=1) {
 				  	 			 	# code...
 				  	 			 	echo "<i class='fas fa-star'></i> 	";
 				  	 			 }
 				  	 			 elseif ($rate<=2) {
 				  	 			 	# code...
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i> 	";
 				  	 			 }
 				  	 			  elseif ($rate<=3) {
 				  	 			 	# code...
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i> 	";
 				  	 			 }
 				  	 			  elseif ($rate<=4) {
 				  	 			 	# code...
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i> 	";
 				  	 			 }
 				  	 			  elseif ($rate<=5) {
 				  	 			 	# code...
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i> 	";
 				  	 			 }
 				  	 			 
 				  	 			 else{
 				  	 			 	echo "<i class='fas fa-star-half-alt'></i> ";
 				  	 			 }
 				  	 			 echo $rate;
 				  	 			 ?>
 				  	 			 	
 				  	 			 </div>
 	</div>
 		
 	

</div>
	<br><br>
	

 <hr>
 <div class="row">
 	<div class="col-12 text-center"><h2>About the advertiser</h2> </div>

 	<?php
 		$adv=$row['Advid'];

 		$query="SELECT * FROM advertiser WHERE advid='$adv' ";
 		$result=mysqli_query($conn,$query);

 		if (mysqli_num_rows($result)>0) {
 			# code...
 			if ($data=mysqli_fetch_assoc($result)) {
 				# code...
 				
 										?>

 			<div class="row">
 				<div class="col-4 text-center" >
 					<img src="<?php echo $data['photo'];?>" width="100px" ><br>
 					<div>Name:<?php echo $data['firstname'];?><?php echo $data['lastname'];?></div><br>
 					<div><?php echo $data['advinfo'];?></div>
 				</div>
 				<div class="col-4"></div>
 				<div class="col-4"></div>
 			</div>							


 										<?php
 				 			}
 		}

 	?>
 </div>
</div>

<?php 
		}
	}
 ?>
   </body>
</html>
