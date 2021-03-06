<?php
  
  include'linkstyles.php';
  include'connect.php';

  ?>


<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8' />
    <title>Create a draggable Marker</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <script src='https://api.tiles.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.js'></script>
    <link href='https://api.tiles.mapbox.com/mapbox-gl-js/v0.50.0/mapbox-gl.css' rel='stylesheet' />
    <style>
        body { margin:0; padding:0; }
        #map {  top:0; bottom:0; width:70%;

                height: 60%;
                margin-left: 200px; }
    </style>
</head>
<body>
<div class="container-fluid">

  <div class="jumbotron text-center"><h2>Posting an advertisement</h2></div>


<style>
.coordinates {
    background: rgba(0,0,0,0.5);
    color: #fff;    
    bottom: 10px;
    left: 10px;
    padding:5px 10px;
    margin: 0;
    font-size: 11px;
    line-height: 18px;
    border-radius: 3px;
    display: none;
}
</style>

  <div class="text-center">Drag the marker to where you're property is located(Scroll to zoom) </div><br>
<div id='map'></div>
<pre id='coordinates' class='coordinates'></pre>

<script>
mapboxgl.accessToken = 'pk.eyJ1IjoiZ2Vvcmdlc3RyYXRoIiwiYSI6ImNqbndsNTRhYTBhN3gzdm84c3c5NHo1cTMifQ.L2M--lv-W2LC-K0OhbAymA';
var coordinates = document.getElementById('coordinates');
var map = new mapboxgl.Map({
    container: 'map',
    style: 'mapbox://styles/mapbox/streets-v9',
    center: [0, 0],
    zoom: 2
});

var marker = new mapboxgl.Marker({
    draggable: true
})
    .setLngLat([0, 0])
    .addTo(map);

function onDragEnd() {
    var lngLat = marker.getLngLat();
    coordinates.style.display = 'none';
    coordinates.innerHTML = 'Longitude: ' + lngLat.lng + '<br />Latitude: ' + lngLat.lat;
    document.getElementsByName('latitude')[0].value=lngLat.lat;
    document.getElementsByName('longitude')[0].value=lngLat.lng;
}

marker.on('dragend', onDragEnd);
</script>
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
      
      Choose a photo of the advertisement<br> <input type="file" name="filetoupload" ><br><br>
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
        <input type="text" class="form-control"   placeholder="List the ammenities provided " name="amenities" >         
  
        <br>
        <label for="comment">Location:(County)</label>
        <input type="text" class="form-control"   placeholder="Location " name="location" > <br>
        <label for="comment">About the Location: <span style="font-size: 12px;"> </span></label>
        <textarea class="form-control" rows="3" name="locationinfo">    
  
        </textarea><br>


        Are the amenities bill included in the rent?<br>
        
          <label><input type="radio" name="billtype" class="radio-inline" value="yes">Yes</label> 
          <label><input type="radio" name="billtype" class="radio-inline" value="Some">Some</label> 
          <label><input type="radio" name="billtype" class="radio-inline" value="No">No</label><br> 
                </textarea><br>
        <label for="comment">Anything extra:(e.g What to bring,explanation of amenities) <span style="font-size: 12px;"> </span></label>
        <textarea class="form-control" rows="3" name="extrainfo">    
  
        </textarea><br>
          <input type="submit" value="Post" class="btn btn-outline-success btn-lg" style="float:right;">
    </div>
    </form> 
    </center>
    </div>
</body>
</html>