<?php 

	include 'connect.php';
	include 'linkstyles.php';

	$location=mysqli_real_escape_string($conn,$_POST['location']);
	$query="SELECT * FROM listings WHERE location LIKE '%$location%' ";

	$result=mysqli_query($conn,$query);
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>Search results</title>
 </head>
 <body>
 	<div class="container-fluid">
 		<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

  <!-- Links -->
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="stuhomepage.php"><i class="far fa-arrow-alt-circle-left "></i> Back</a>
    </li>
      <form class="form-inline" method="POST" action="search.php" style="margin-left: 900px;">
    <input class="form-control mr-sm-2" type="text" placeholder="Search" name="location" autofcus>
    <button class="btn btn-success" type="submit">Search</button>
   </form>
   
  </ul>

</nav>
<br><br><br><br>
				<button class="btn btn-outline-dark" style="float:right;"><i class="fas fa-sliders-h"></i></button>
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
 				  	 			<img src="<?php echo $row['photo']; ?>" width="200px;" height="auto;">
 				  	 		</div>
 				  	 		<div class="col-4">
 				  	 			<p>
 				  	 				<b style="font-size: 19px;">Advertiser:</b><?php echo $row['advfirstname']. $row['advlastname'];?><br>
 				  	 				<b style="font-size: 19px;">Location:</b><?php echo $row['location'];?><br>
 				  	 			<b style="font-size: 19px;">Type:</b><?php echo $row['Category'];?></p>
 				  	 		</div>
 				  	 		<div class="col-4">
 				  	 			<p><b style="font-size: 19px;">Rating:</b><?php


 				  	 			 $rate=$row['rating'];
 				  	 			 if ($rate>2.5) {
 				  	 			 	# code...
 				  	 			 	echo "<i class='fas fa-star'></i>";
 				  	 			 }
 				  	 			 else{
 				  	 			 	echo "<i class='fas fa-star-half-alt'></i>";
 				  	 			 }
 				  	 			 ?>
 				  	 			 	

 				  	 			 </p>
 				  	 			<button class="btn btn-outline-info"><a href="" style="text-decoration-line: none;" class="text-dark">View More</a></button>
 				  	 		</div>
 				  	 	</div>
 				    </div> 
 				</div>
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