<!DOCTYPE html>
<html>
    <head>
        <title>HomePage</title>
        <meta charset="utf-8"/>
        <meta name="viewport" content="wnameth=device-wnameth, initial-scale=1"/>
        <link rel="stylesheet" href="map.css"/>
        <link rel="stylesheet" href="../res/res.css"/>
        <link href='https://fonts.googleapis.com/css?family=Aclon' rel='stylesheet'/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
        <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
        /* The Modal (background) */
    .modal {
      display: none; /* Hidden by default */
      position: fixed; /* Stay in place */
      z-index: 1000; /* Sit on top */
      padding-top: 100px; /* Location of the box */
      left: 0;
      top: 0;
      width: 100%; /* Full width */
      height: 100%; /* Full height */
      overflow: auto; /* Enable scroll if needed */
      background-color: rgb(0,0,0); /* Fallback color */
      background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
    }
    /* Modal Header */
    .modal-header {
      padding: 2px 16px;
      background-color: #5cb85c;
      color: white;
        font-size: 40px;
    }
    /* Modal Content */
    .modal-content {
      background-color: #fefefe;
      margin: auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
        font-size: 25px;
    }

    /* The Close Button */
    .close {
      color: #aaaaaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close:hover,
    .close:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
    /* Add Animation */
    @-webkit-keyframes animatetop {
      from {top:-300px; opacity:0} 
      to {top:0; opacity:1}
    }

    @keyframes animatetop {
      from {top:-300px; opacity:0}
      to {top:0; opacity:1}
    }
    </style>
     <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>
    <script>
     
      var map, infoWindow, pos;
      var clickedPosition;
      function initMap() {

       map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 6
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });


          calculateDistance();

           
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }


      }

      function calculateDistance(){

        var latitude1 = 18.4718;
        var longitude1 = 73.8671;
        var latitude2 = 18.4575;
        var longitude2 = 73.8677;
        var latitude3 = 18.5089;
        var longitude3 = 73.926;
        var latitude4 = 18.4771;
        var longitude4 = 73.8907;
        var latitude5 = 18.5018;
        var longitude5 = 73.8636;
        var latitude6 = 18.5176;
        var longitude6 = 73.8417;
        var latitude7 = 19.1132;
        var longitude7 = 73.7327;
        var latitude8 = 18.4422;
        var longitude8 = 73.8096;
        var latitude9 = 18.5308;
        var longitude9 = 73.8475;
        var latitude10 = 18.5286;
        var longitude10 = 73.8746;


        var currentLat = 18.4575;
        var currentLng = 73.8508;
        var distance1 = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(currentLat,currentLng), new google.maps.LatLng(latitude1, longitude1));
        var distance2 = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(currentLat,currentLng), new google.maps.LatLng(latitude2, longitude2)); 
        var distance3 = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(currentLat,currentLng), new google.maps.LatLng(latitude3, longitude3));
        var distance4 = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(currentLat,currentLng), new google.maps.LatLng(latitude4, longitude4));
        var distance5 = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(currentLat,currentLng), new google.maps.LatLng(latitude5, longitude5));
        var distance6 = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(currentLat,currentLng), new google.maps.LatLng(latitude6, longitude6));
        var distance7 = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(currentLat,currentLng), new google.maps.LatLng(latitude7, longitude7));
        var distance8 = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(currentLat,currentLng), new google.maps.LatLng(latitude8, longitude8));
        var distance9 = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(currentLat,currentLng), new google.maps.LatLng(latitude9, longitude9));
        var distance10 = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(currentLat,currentLng), new google.maps.LatLng(latitude10, longitude10));


        if((distance1/1000)<5){
          var marker1 = new google.maps.Marker({
           position: {lat: latitude1, lng: longitude1},
           map: map,
           title: 'Bibbewadi!'
           }); 
          google.maps.event.addListener(marker1, 'click', function() {
              displayPopup(latitude1,longitude1);
            });


        }
        if((distance2/1000)<5){
          var marker2 = new google.maps.Marker({
           position: {lat: latitude2, lng: longitude2},
           map: map,
           title: 'Katraj!'
           });
           google.maps.event.addListener(marker2, 'click', function() {
              displayPopup(latitude2,longitude2);
            });  
        }
        if((distance3/1000)<5){
          var marker3 = new google.maps.Marker({
           position: {lat: latitude3, lng: longitude3},
           map: map,
           title: 'Hadpsar!'
           }); 
           google.maps.event.addListener(marker3, 'click', function() {
             
              displayPopup(latitude3,longitude3);
            });  
        }
        if((distance4/1000)<5){
          var marker4 = new google.maps.Marker({
           position: {lat: latitude4, lng: longitude4},
           map: map,
           title: 'Kondhwa!'
           }); 
           google.maps.event.addListener(marker4, 'click', function() {
              
              displayPopup(latitude4,longitude4);
            });  
        }
        if((distance5/1000)<5){
          var marker5 = new google.maps.Marker({
           position: {lat: latitude5, lng: longitude5},
           map: map,
           title: 'Swargate!'
           }); 
           google.maps.event.addListener(marker5, 'click', function() {
              
              displayPopup(latitude5,longitude5);
            });  
        }
        if((distance6/1000)<5){
          var marker6 = new google.maps.Marker({
           position: {lat: latitude6, lng: longitude6},
           map: map,
           title: 'Deccan!'
           }); 
           google.maps.event.addListener(marker6, 'click', function() {
            
              displayPopup(latitude6,longitude6);
            });  
        }
        if((distance7/1000)<5){
          var marker7 = new google.maps.Marker({
           position: {lat: latitude7, lng: longitude7},
           map: map,
           title: 'Ambegaon!'
           });
           google.maps.event.addListener(marker7, 'click', function() {
              
              displayPopup(latitude7,longitude7);
            });   
        }
        if((distance8/1000)<5){
          var marker8 = new google.maps.Marker({
           position: {lat: latitude8, lng: longitude8},
           map: map,
           title: 'Dhayri!'
           }); 
           google.maps.event.addListener(marker8, 'click', function() {
              
              displayPopup(latitude8,longitude8);
            });  
        }
        if((distance9/1000)<5){
          var marker9 = new google.maps.Marker({
           position: {lat: latitude9, lng: longitude9},
           map: map,
           title: 'ShivajiNagar!'
           });
           google.maps.event.addListener(marker9, 'click', function() {
              
              displayPopup(latitude9,longitude9);
            });   
        }
        if((distance10/1000)<5){
          var marker10 = new google.maps.Marker({
           position: {lat: latitude10, lng: longitude10},
           map: map,
           title: 'Pune Station!'
           });
           google.maps.event.addListener(marker10, 'click', function() {
              
              displayPopup(latitude10,longitude10);
            });   
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
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBoHWY3yipd4SoImW94IEDg65f4yDgBw1A&callback=initMap"
    async defer></script>
        <script src="../res/res.js"></script>
        <script src="map.js"></script>
    </head>
    <body style="overflow-x: hidden;">
        <header>
        <div class="container-fluname  back1"> 
          <div class="row" style="line-height: 110px;">
            <div class="col-lg-6"><a href="../home/home.php" alt="Symbol"><img src="../images/car2.png" alt="Image" wnameth="100" height="100"/></a>
              <span class="heading">Car Parking</span></div>
              <div class="col-lg-6">
              <ul class="nav nav-pills" style="float:right;">
                <li><a href="../home/home.php" class="pills-features">HOME</a></li>
                <li class="active"><a href="../map/map.php" class="pills-features">MAP</a></li>
                  <!--<li><a href="../feedback/feedback.html" class="pills-features">FEEDBACK</a></li>-->
                  <li><a href="../receipt/receipt.php" class="pills-features">RECEIPT</a></li>
                <li><a href="../login/login.html" class="pills-features">LOGIN</a></li>
                <li><a href="../signup/signup.html" class="pills-features">SIGN UP</a></li>
              </ul>
          </div>
           </div>
        </div>
        </header>
        <script>
            function displayPopup(tempLat,tempLng){
                // Get the modal
                //var modal = document.getElementById('myModal');
                // Get the <span> element that closes the modal
                //var span = document.getElementsByClassName("close")[0];
                window.location="?var1=" + tempLat+"&var2="+tempLng;
            }</script>
                <?php
                    $lat=$_GET['var1'];
                    $lng=$_GET['var2'];
                    ?>
                <script>
                var infowindow = new google.maps.InfoWindow;
                    
                </script>
                
<!--
                modal.style.display = "block";
                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                  modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                  if (event.target == modal) {
                    modal.style.display = "none";
                  }
                }
               //window.alert(tempLat+" "+tempLng);
              }
        </script>
-->
        <!--<form action="map.php" method="get">
        <button name="myBtn" type="submit" value="Bibwewadi">Bibwewadi</button>
        <button name="myBtn" type="submit" value="Katraj">Katraj</button>
        <button name="myBtn" type="submit" value="Hadapsar">Hadapsar</button>
        <button name="myBtn" type="submit" value="Kondwa">Kondwa</button>
        <button name="myBtn" type="submit" value="Swargate">Swargate</button>
        <button name="myBtn" type="submit" value="Deccan">Deccan</button>
        <button name="myBtn" type="submit" value="Ambegaon">Ambegaon</button>
        <button name="myBtn" type="submit" value="Dhayari">Dhayari</button>
        <button name="myBtn" type="submit" value="Shivajinagar">Shivajinagar</button>
        <button name="myBtn" type="submit" value="Pune Station">Pune Station</button>
        </form>-->
        
        <div id="map">
            <footer style="position:absolute;bottom:0;width: 100%;margin-top:300px;">
            <div  class="footer1 container-fluname" style="position:absolute;bottom:0;width:100%">
            <div class="row">
                  <div class="col-lg-4">
                      <b class="foot-head"><div class='fa fa-thumb-tack'></div> LINKS</b>
                      <ul class="foot-text">
                          <li><a href="../home/home.php" class="linkFoot">HOME</a></li>
                          <li><a href="../map/map.php" class="linkFoot">MAP</a></li>
                          <li><a href="../receipt/receipt.php" class="linkFoot">RECEIPT</a></li>
                          <li><a href="../login/login.html" class="linkFoot">LOGIN</a></li>
                          <li><a href="../signup/signup.html" class="linkFoot">SIGN UP</a></li>
                      </ul>
                  </div>
                  <div class="col-lg-4">
                      <b class="foot-head"><div class='fa fa-thumb-tack'></div> JOIN US</b><br/>
                      <a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a>
                      <a href="https://twitter.com/login?lang=en"><i class="fa fa-twitter"></i></a>
                      <a href="https://plus.google.com/discover"><i class="fa fa-google"></i></a>
                      <a href="https://in.linkedin.com/"><i class="fa fa-linkedin"></i></a>
                  </div>
                  <div class="col-lg-4">
                      <b class="foot-head"><div class='fa fa-thumb-tack'></div> Frequently asked questions</b>
                      <ul class="foot-text">
                          <li><a href="../faq/faq.html" class="linkFoot">Why should I choose this blogging site?</a></li>
                          <li><a href="../faq/faq.html" class="linkFoot">How can quality content grow my audience?</a></li>
                          <li><a href="../faq/faq.html" class="linkFoot">How should I research blog topics and get information for my specific niche?</a></li>
                          <div style="float:right"><a href="../faq/faq.html" class="linkFoot">more.....</a></div>
                      </ul>
                  </div>
            </div>
            </div>
            </footer>
        </div>
        
            <!-- The Modal -->
            <!--<div name="myModal" class="modal">

              <!-- Modal content 
              <div class="modal-content">
                <div>
                  <span class="close">&times;</span>
                  <h2>Modal Header</h2>
                </div>
                <div class="modal-body">
                  <p>Some text in the Modal Body</p>
                  <p>Some other text...</p>
                </div>
                <div>
                  <h3>Modal Footer</h3>
                </div>
              </div>

            </div>-->
        
    </body>
</html> 