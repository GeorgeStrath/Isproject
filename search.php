<?php 

	include 'connect.php';
	include 'linkstyles.php';

	$location=mysqli_real_escape_string($conn,$_POST['location']);
	$query="SELECT * FROM listings WHERE location LIKE '%$location%' ORDER BY rating DESC ";

	$result=mysqli_query($conn,$query);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Search results</title>
 </head>
 <body>
 	<div class="container-fluid">
 		<nav class="navbar navbar-expand-sm bg-light navbar-light fixed-top">

  <!-- Links -->
 
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link " href="stuhomepage.php" ><i class="far fa-arrow-alt-circle-left "></i> Back Home</a>
    </li>
      <form class="form-inline" method="POST" action="search.php" style="margin-left: 850px;">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="location" autofcus>
    <button class="btn btn-outline-success" type="submit">Search</button>
   </form>
   
  </ul>


</nav>
<br><br><br><br>

				<br>
				<br>
				
 	<?php
 	

	if (mysqli_num_rows($result)>0) {
		# code...
		while ($row=mysqli_fetch_assoc($result)) {?>
			<div class="container">
				<div class="card bg-light text-white">
 				   <div class="card-body">
 				  	 	<div class="row  text-dark">
 				  	 		<div class="col-4">
 				  	 			<img src="<?php echo $row['photo']; ?>" width="200px;" height="auto;" style="border-radius:7px; ">
 				  	 		</div>
 				  	 		<div class="col-4">
 				  	 			<p>
 				  	 				<b style="font-size: 19px;">Advertiser:</b><?php echo $row['advfirstname']. $row['advlastname'];?><br>
 				  	 				<b style="font-size: 19px;">Location:</b><?php echo $row['location'];?><br>
 				  	 			<b style="font-size: 19px;">Room Type:</b><?php echo $row['Category'];?><br>
 				  	 			<b style="font-size: 19px;">Type:</b><?php echo $row['accommodationtype'];?><br>
 				  	 			<b style="font-size: 19px;">Cost:</b><?php echo $row['cost'];?> kshs per month<br>
 				  	 		</p>
 				  	 		</div>
 				  	 		<div class="col-4">
 				  	 			<p><b style="font-size: 19px;">Rating:</b><?php


 				  	 			 $rate=$row['rating'];
 				  	 			 if ($rate<=0) {
 				  	 			 	# code...
 				  	 			 	echo "<i class='far fa-star'></i>";
 				  	 			 }
 				  	 			 elseif ($rate<=1) {
 				  	 			 	# code...
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 }
 				  	 			 elseif ($rate<=2) {
 				  	 			 	# code...
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 }
 				  	 			  elseif ($rate<=3) {
 				  	 			 	# code...
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 }
 				  	 			  elseif ($rate<=4) {
 				  	 			 	# code...
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 }
 				  	 			  elseif ($rate<=5) {
 				  	 			 	# code...
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 }
 				  	 			 
 				  	 			 else{
 				  	 			 	echo "<i class='fas fa-star-half-alt'></i>";
 				  	 			 }
 				  	 			 ?>
 				  	 			 	

 				  	 			 </p>
 				  	 			<button class="btn btn-outline-info"><a href="details.php?id=<?php echo $row['listid']; ?> " style="text-decoration-line: none;" class="text-dark">View More</a></button>
 				  	 		</div>
 				  	 	</div>
 				    </div> 
 				</div>
 				<br>
 				</div>
			
<?php
		}
	}
	else
	{
		?>
			 <div class="card bg-warning text-white">
  					  <div class="card-body text-center text-capitalize text-dark"><h2><b> No results Found</h2></b></div>
  		     </div>
		<?php
	}


 	?>
 	
 </div>
 </body>
 </html>