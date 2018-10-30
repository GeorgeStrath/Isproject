<!DOCTYPE html>
<html>
    <?php
        session_start();
        include 'connect.php';
    ?>
    <?php include 'linkstyles.php'; ?>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
<?php include 'linkstyles.php'; ?>
    <style type="text/css">
 
#background { 
    /* The image used */
    background-image: url("images/signupstudent.jpg");
    background-size: cover ;
    background-position: center;
    background-repeat: no-repeat;
    width: 1300px;
    height: 680px;
    filter: brightness(100%);
   
}

nav a:hover{
    border-bottom: 1px solid white;
}
    </style>


</head>
<body>
    <div  class="container-fluid" > 
          <div class="row">
                <div class="col-md-12" id="background">
                    <nav class="navbar navbar-expand-sm fixed-top ">
           <ul class="navbar-nav">
               <li class="nav-item">
                   <a href="#" class="nav-link" style="color: white;">Home</a>
               </li>
               <li class="nav-item">
                   <a href="#" class="nav-link" style="color: white;">Search</a>
               </li>
               <li class="nav-item">
                   <a href="#vhouses" class="nav-link" style="color: white;">View Houses</a>
               </li>
                <li class="nav-item">
                   <a href="#" class="nav-link" style=" margin-left:900px;"><i class="fa fa-cog fa-spin" style="color: white; font-size: 20px;"></i></a>
               </li>
               <li class="nav-item">
                   <a href="signout.php" class="nav-link" style="color: white; margin-left:20px ;">Sign Out</a>
               </li>


           </ul>

       </nav>
       

       <div class="row" style="margin-top:100px; filter: brightness(100%);">
           <div class="col-md-4"></div>
           <div class="col-md-3"></div>
           <div class="col-md-4" style="background-color: white; ">
               <form method="post" action="search.php"><br>
                    <h4 class="text-dark text-center" >Find your next home</h4><br>
                   <input type="text" name="location" class="form-control" placeholder="Enter location" autofocus><br>
                   <button type="submit" name="" class="btn btn-success btn-block text-light text-center" >
                    Search
                  </button>
                  <br>
               </form>


           </div>
       </div>


       <center><i class="fa fa-angle-double-down" style="color: white; font-size: 100px; margin-top: 250px;"></i></center>
                </div>
            </div>
        
        
       <br>
       <div class="row">
         <div class="col-md-12">
           <h1 class="text-center" style="font-family:Britannic; font-style:oblique; " id="vhouses">Choose the right place for you</h1>
         </div>
       </div>
       
       <br>
       

       <center>
        
        <ul class="nav nav-pills text-center nav-fill navbar-dark " role="tablist" >
          <li class="nav-item">
            <a href="#singles" class="nav-link " data-toggle="pill"><i class="fas fa-user-alt"></i> Singles</a>
          </li>
          <li class="nav-item">
            <a href="#doubles" class="nav-link" data-toggle="pill"><i class="fas fa-user-friends"></i> Doubles</a>
          </li>
          <li class="nav-item">
            <a href="#quadruples" class="nav-link" data-toggle="pill"><i class="fa fa-users"></i>  Quadruples</a>
          </li>
          
        </ul>
        
        <br><br>

        <div class="tab-content">
      <!-- Singles -->
      <div class="card-columns w-75 border-dark tab-pane container active" id="singles">
      <?php  
        $query="SELECT * FROM listings WHERE Category='single' ORDER BY rating DESC";
        $result=mysqli_query($conn,$query);
        if (mysqli_num_rows($result)>0) {
          # code...
          while ($row=mysqli_fetch_assoc($result)) { 
        ?>

       
            <div class="card " >
              <div class="card-body text-center">
                <div class="card-text"><img src="<?php echo $row['photo']; ?>" width="250px" class="card-img-top" style="border-radius:7px; "></div>
                  <div style="font-size:15px; ">Location:<?php echo $row['location']; ?> </div>   
                  <div style="font-size:15px; ">Vacancies:<?php echo $row['vacancies']; ?> rooms</div>
                  <div style="font-size:15px; ">Rating:<span style="font-size:10px; "><?php


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
                   ?></span></div>
              </div>
              <button class="btn btn-outline-info"><a href="details.php?id=<?php echo $row['listid']; ?> " style="text-decoration-line: none;" class="text-dark">View More</a></button>
  
          </div>
        

      <?php  }}?>
      </div>

        <!-- doubles -->
        <div class="card-columns w-75 border-dark tab-pane container " id="doubles">
             <?php  
        $query="SELECT * FROM listings WHERE Category='Double' ORDER BY rating DESC";
        $result=mysqli_query($conn,$query);
        if (mysqli_num_rows($result)>0) {
          # code...
          while ($row=mysqli_fetch_assoc($result)) { 
        ?>

       
            <div class="card " style=" ">
              <div class="card-body text-center">
                <div class="card-text"><img src="<?php echo $row['photo']; ?>" width="250px"  class="card-img-top"  style="border-radius:7px; "></div>
                 <div style="font-size:15px; ">Location:<?php echo $row['location']; ?> </div>
                <div style="font-size:15px; ">Vacancies:<?php echo $row['vacancies']; ?> rooms</div>
                <div style="font-size:15px; ">Rating:<span style="font-size:10px; "><?php


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
                   ?></span></div>
              </div>
              <button class="btn btn-outline-info"><a href="details.php?id=<?php echo $row['listid']; ?> " style="text-decoration-line: none;" class="text-dark">View More</a></button>
  
          </div>

        

      <?php  }}?> 
      </div>
        <!-- Quadruples -->
        <div class="card-columns w-75 border-dark tab-pane container " id="quadruples"
              <?php  
        $query="SELECT * FROM listings WHERE Category='Quadruple' ORDER BY rating DESC";
        $result=mysqli_query($conn,$query);
        if (mysqli_num_rows($result)>0) {
          # code...
          while ($row=mysqli_fetch_assoc($result)) { 
        ?>

       >
            <div class="card ">
              <div class="card-body text-center">
                <div class="card-text"><img src="<?php echo $row['photo']; ?>" width="250px" class="card-img-top" style="border-radius:7px; "></div>
                <div style="font-size:15px; ">Location:<?php echo $row['location']; ?> </div>
                <div style="font-size:15px; ">Vacancies:<?php echo $row['vacancies']; ?> rooms</div>
                <div style="font-size:15px; ">Rating:<span style="font-size:10px; "><?php


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
                   ?></span></div>
              </div>
              <button class="btn btn-outline-info"><a href="details.php?id=<?php echo $row['listid']; ?> " style="text-decoration-line: none;" class="text-dark">View More</a></button>
  
          </div>
        

      <?php  }}?>
      </div>
    </div>  
</center>


       
</div>
    
    
    
    
</body>
</html>