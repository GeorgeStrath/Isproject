<!DOCTYPE html>
<html>
  <head>
    <title>Geolocation</title>
    <meta name="viewport" content="initial-scale=2.0, user-scalable=Yes">
    <meta charset="utf-8">
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 300px;   
        width: 600px;
        margin-left: 400px;
                    
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
       height: 50%;
        margin: 0px;
        padding: 0;
        
      }
      
      form{
        margin: 50px;
      }

    </style>
    <link rel="stylesheet" type="text/css" href="bootstrap-4.1.3-dist/css/bootstrap.css">
  </head>
  <body>
    <div class="jumbotron" ><h2>Posting Advertisement</h2></div>
    <center><h3><b>Advertisement Information</b></h3><br>
    <span><b> This map shows you exact position </b></span><br>
    <span style="color:gray; font-size: 10px;">Disclaimer* Ensure you are at the position of your advertisement</span><br>
  </center>
    <div id="map">
         
      <script>
        // Note: This example requires that you consent to location sharing when
        // prompted by your browser. If you see the error "The Geolocation service
        // failed.", it means you probably did not give permission for the browser to
        // locate you.
        var map, infoWindow;
        function initMap() {
          map = new google.maps.Map(document.getElementById('map'), {
            center: {lat: -34.397, lng: 150.644},
            zoom: 15
          });
          infoWindow = new google.maps.InfoWindow;
  
          // Try HTML5 geolocation.
          if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(function(position) {
              var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
                
              };
              
              infoWindow.setPosition(pos);
              infoWindow.setContent('Location found.');
              infoWindow.open(map);
              map.setCenter(pos);
              
              
              document.getElementsByName('latitude')[0].value=position.coords.latitude;
              document.getElementsByName('longitude')[0].value=position.coords.longitude;
            }, function() {
              handleLocationError(true, infoWindow, map.getCenter());
            });
          } else {
            // Browser doesn't support Geolocation
            handleLocationError(false, infoWindow, map.getCenter());
          }
        }
  
        function handleLocationError(browserHasGeolocation, infoWindow, pos) {
          infoWindow.setPosition(pos);
          infoWindow.setContent(browserHasGeolocation ?
                                'Error: The Geolocation service failed.' :
                                'Error: Your browser doesn\'t support geolocation.');
          infoWindow.open(map);
        }
      </script>
       <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDSb5YDW2rNo4ZNmj5QC44QfIeetujfQgM&callback=initMap">
    </script>
     
      </div>

      <center>
    <form method="POST" enctype="multipart/form-data" action="postdb.php" class="w-75 text-center">

      <input type="hidden" name="latitude" class="form-control" readonly>
       <input type="hidden" name="longitude" class="form-control" readonly><br>
      <div class="form-group">
        <label for="" >Choose the type accommodation </label>
      <select class="form-control" name="acctype">
        <option>apartment</option>
        <option>Hostel</option>
        <option>House</option>
        
      </select>

      </div>
      No of Vacancies<br><input type="number" placeholder="How many vacancies are present" name="vacancies" class="form-control">
      <div class="form-group">
      
      Choose a photo<br> <input type="file" name="filetoupload" ><br><br>
      Cost<br><input type="number" name="cost" placeholder="Enter the price of the room" class="form-control"><br>

      <div class="form-group">
        <label for="" >Choose the room size </label>
      <select class="form-control" name="roomsize">
        <option>Single</option>
        <option>Double</option>
        <option>Quadruple</option>        
      </select>
      </div>

      <div class="form-group">
        <label for="comment">Amenities provided:</label>
        <textarea class="form-control" rows="3"  placeholder="List the ammenities provided " name="amenities" >
          
  
        </textarea><br>
        <label for="comment">Location: <span style="font-size: 12px;"> (Be as specific as possible)</span></label>
        <textarea class="form-control" rows="3"  placeholder="List the ammenities provided " name="location" >
          
  
        </textarea><br>


        Are the amenities bill included in the rent?<br>
        
          <label><input type="radio" name="billtype" class="radio-inline" value="yes">Yes</label> 
          <label><input type="radio" name="billtype" class="radio-inline" value="Some">Some</label> 
          <label><input type="radio" name="billtype" class="radio-inline" value="No">No</label><br> 
        
          <input type="submit" value="Post" class="btn btn-outline-success btn-lg" style="float:right;">
    </div>
    </form> 
    </center>

   
    
 
    
   



    
    
  </body>
</html>