<?php
	include 'connect.php';
	include 'linkstyles.php';
	

	$listid=$_POST['listid'];
	$advid=$_POST['advid'];
	$stuid=$_POST['stuid'];
	
	$acceptance='no';
	

	$query="INSERT INTO bookings(listid, stuid, advid, acceptance) VALUES ('$listid','$stuid','$advid','$acceptance')";

		mysqli_query($conn,$query);
		header("Location: details.php?id=$listid ");

?>