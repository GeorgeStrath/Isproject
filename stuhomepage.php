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
    filter: brightness(90%);
   
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
                    <nav class="navbar navbar-expand-sm ">
           <ul class="navbar-nav">
               <li class="nav-item">
                   <a href="#" class="nav-link" style="color: black;">Home</a>
               </li>
               <li class="nav-item">
                   <a href="#" class="nav-link" style="color: black;">Search</a>
               </li>
               <li class="nav-item">
                   <a href="#" class="nav-link" style="color: black;">View Houses</a>
               </li>
                <li class="nav-item">
                   <a href="#" class="nav-link" style=" margin-left:900px;"><i class="fa fa-cog fa-spin" style="color: black; font-size: 20px;"></i></a>
               </li>
               <li class="nav-item">
                   <a href="signout.php" class="nav-link" style="color: black; margin-left:20px ;">Sign Out</a>
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


       <center><i class="fa fa-angle-double-down" style="color: white; font-size: 100px; margin-top: 180px;"></i></center>
                </div>
            </div>
        
        
       <br>
       <div class="row">
         <div class="col-md-12">
           <h1 class="text-center" style="font-family:Britannic; font-style:oblique; ">Choose the right place for you</h1>
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

       
            <div class="card ">
              <div class="card-body text-center">
                <p class="card-text"><img src="<?php echo $row['photo']; ?>" width="250px" class="card-img-top"></p>               
              </div>
  
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

       
            <div class="card ">
              <div class="card-body text-center">
                <p class="card-text"><img src="<?php echo $row['photo']; ?>" width="250px" class="card-img-top"></p>
              </div>
  
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
                <p class="card-text"><img src="<?php echo $row['photo']; ?>" width="250px" class="card-img-top"></p>
              </div>
  
          </div>
        

      <?php  }}?>
      </div>
    </div>  
</center>


       
</div>
    
    
    
    
</body>
</html>