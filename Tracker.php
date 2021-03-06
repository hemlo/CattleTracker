<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Cattle Tracker</title>
  
  
  
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      *, *:after, *:before {
  box-sizing: border-box;
}

.animenu__toggle {
  display: none;
  cursor: pointer;
  background-color: #134;
  border: 0;
  padding: 10px;
  height: 40px;
  width: 40px;
}
.animenu__toggle:hover {
  background-color: #0186ba;
}

.animenu__toggle__bar {
  display: block;
  width: 20px;
  height: 2px;
  background-color: #fff;
  transition: 0.15s cubic-bezier(0.75, -0.55, 0.25, 1.55);
}
.animenu__toggle__bar + .animenu__toggle__bar {
  margin-top: 4px;
}

.animenu__toggle--active .animenu__toggle__bar {
  margin: 0;
  position: absolute;
}
.animenu__toggle--active .animenu__toggle__bar:nth-child(1) {
  transform: rotate(45deg);
}
.animenu__toggle--active .animenu__toggle__bar:nth-child(2) {
  opacity: 0;
}
.animenu__toggle--active .animenu__toggle__bar:nth-child(3) {
  transform: rotate(-45deg);
}

.animenu {
  display: block;
}
.animenu ul {
  padding: 0;
  list-style: none;
  font: 0px 'Open Sans', Arial, Helvetica;
}
.animenu li, .animenu a {
  display: inline-block;
  font-size: 15px;
}
.animenu a {
  color: #cccc99;
  text-decoration: none;
}

.animenu__nav {
  background-color: #134;
  position: relative;
}
.animenu__nav > li {
  position: relative;
  border-right: 1px solid #666633;
}
.animenu__nav > li > a {
  padding: 10px 40px;
  text-transform: uppercase;
}
.animenu__nav > li > a:first-child:nth-last-child(2):before {
  content: "";
  position: absolute;
  border: 4px solid transparent;
  border-bottom: 0;
  border-top-color: currentColor;
  top: 50%;
  margin-top: -2px;
  right: 10px;
}
.animenu__nav > li:hover > ul {
  opacity: 1;
  visibility: visible;
  margin: 0;
}
.animenu__nav > li:hover > a {
  color: #fff;
}

.animenu__nav__child {
  min-width: 100%;
  position: absolute;
  top: 100%;
  left: 0;
  z-index: 1;
  opacity: 0;
  visibility: hidden;
  margin: 20px 0 0 0;
  background-color: #55552b;
  transition: margin .15s, opacity .15s;
}
.animenu__nav__child > li {
  width: 100%;
  border-bottom: 1px solid #77773c;
}
.animenu__nav__child > li:first-child > a:after {
  content: '';
  position: absolute;
  height: 0;
  width: 0;
  left: 1em;
  top: -6px;
  border: 6px solid transparent;
  border-top: 0;
  border-bottom-color: inherit;
}
.animenu__nav__child > li:last-child {
  border: 0;
}
.animenu__nav__child a {
  padding: 10px;
  width: 100%;
  border-color: #55552b;
}
.animenu__nav__child a:hover {
  background-color: #0186ba;
  border-color: #0186ba;
  color: #fff;
}

@media screen and (max-width: 767px) {
  .animenu__toggle {
    display: inline-block;
  }

  .animenu__nav,
  .animenu__nav__child {
    display: none;
  }

  .animenu__nav {
    margin: 10px 0;
  }
  .animenu__nav > li {
    width: 100%;
    border-right: 0;
    border-bottom: 1px solid #77773c;
  }
  .animenu__nav > li:last-child {
    border: 0;
  }
  .animenu__nav > li:first-child > a:after {
    content: '';
    position: absolute;
    height: 0;
    width: 0;
    left: 1em;
    top: -6px;
    border: 6px solid transparent;
    border-top: 0;
    border-bottom-color: inherit;
  }
  .animenu__nav > li > a {
    width: 100%;
    padding: 10px;
    border-color: #221;
    position: relative;
  }
  .animenu__nav a:hover {
    background-color: #0186ba;
    border-color: #0186ba;
    color: #fff;
  }

  .animenu__nav__child {
    position: static;
    background-color: #55552b;
    margin: 0;
    transition: none;
    visibility: visible;
    opacity: 1;
  }
  .animenu__nav__child > li:first-child > a:after {
    content: none;
  }
  .animenu__nav__child a {
    padding-left: 20px;
    width: 100%;
  }
}
.animenu__nav--open {
  display: block !important;
}
.animenu__nav--open .animenu__nav__child {
  display: block;
}

#container {
   bottom: 0;
   height: 65%;
   margin: auto;
   left: 0;
   position: absolute;
   right: 0;
   top: 0;
   width: 50%;   
}

.contain{
   bottom: 0;
   height: 85%;
   margin: auto;
   left: 0;
   position: absolute;
   right: 0;
   top: 0;
   width: 100%;
   background-color: #55552b;
}
.containBelow{
   bottom: 0;
   height: 15%;
   margin: auto;
   left: 0;
   position: absolute;
   right: 0;
   top: 100%;
   width: 100%;
   background-color: #134;
}

.btn {
  background: #dedeb4;
  background-image: -webkit-linear-gradient(top, #dedeb4, #e3e3a8);
  background-image: -moz-linear-gradient(top, #dedeb4, #e3e3a8);
  background-image: -ms-linear-gradient(top, #dedeb4, #e3e3a8);
  background-image: -o-linear-gradient(top, #dedeb4, #e3e3a8);
  background-image: linear-gradient(to bottom, #dedeb4, #e3e3a8);
  -webkit-border-radius: 28;
  -moz-border-radius: 28;
  border-radius: 28px;
  font-family: Arial;
  color: #134;
  font-size: 16px;
  padding: 10px 20px 10px 20px;
  text-decoration: none;
}

.btn:hover {
  background: #55552b;
  background-image: -webkit-linear-gradient(top, #55552b, #55552b);
  background-image: -moz-linear-gradient(top, #55552b, #55552b);
  background-image: -ms-linear-gradient(top, #55552b, #55552b);
  background-image: -o-linear-gradient(top, #55552b, #55552b);
  background-image: linear-gradient(to bottom, #55552b, #55552b);
  text-decoration: none;
}

#inner {
    display: table;
    margin: 0 auto; 
}

    </style>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
<div style='position:absolute;z-index:0;left:0;top:0;width:100%;height:100%'>
  <img src='Images/photo_bg.jpg' style='width:100%;height:100%' alt='[]' />
</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7/jquery.min.js"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?key=AIzaSyDVyUJICgLiFeXNfnid1LKZNPph3GYL7HE"></script>
	<script src="./gmaps/gmaps.js"></script>
</head>
<body>
  <nav class="animenu"> 
  <button class="animenu__toggle">
    <span class="animenu__toggle__bar"></span>
    <span class="animenu__toggle__bar"></span>
    <span class="animenu__toggle__bar"></span>
  </button>
  <ul class="animenu__nav">
    <li>
      <a href="index.php">Home</a>
    </li>
    <li>
      <a href="Feeder.php">Live Feeder</a>
      <ul class="animenu__nav__child">
        <li><a href="Feeder.php">Feeder Home</a></li>
        <li><a href="FeederSettings.php">Settings</a></li>
      </ul>
    </li> 
    <li>
      <a href="Tracker.php">Cattle Tracker</a>
      <ul class="animenu__nav__child">
        <li><a href="Tracker.php">Tracker Home</a></li>
        <li><a href="">Create New Geofence</a></li>
        <li><a href="TrackerSettings">Settings</a></li>
      </ul>
    </li>     
    <li>
      <a href="Database.php">Database</a>
      <ul class="animenu__nav__child">
        <li><a href="">Search</a></li>
        <li><a href="Add.php">Add Herd/Cow</a></li>
        <li><a href="Delete.php">Delete Herd/Cow</a></li>
      </ul>
    </li>
    <li>
      <a href="#">About</a>
    </li>
    <li>
      <a href="#">Contact</a>
    </li>                 
  </ul>
</nav>
   <div id="container">
      <div class="contain">
      <center>
      <script>
      var map = new GMaps({
  			div: '.contain',
  			lat: -12.043333,
  			lng: -77.028333,
		});
      	GMaps.geolocate({
        	  success: function(position){
        	    map.setCenter(position.coords.latitude, position.coords.longitude);
        	  },
        	  error: function(error){
        	    alert('Geolocation failed: '+error.message);
        	  },
        	  not_supported: function(){
        	    alert("Your browser does not support geolocation");
        	  }
        	});
      	map.setContextMenu({
      		control: 'map',
      		options: [{
      			title: 'Add Geofence',
      			name: 'add_geofence',
      			action: function(e) {
      				var path = 
      					[[e.latLng.lat(),e.latLng.lng()],
      					[e.latLng.lat()+0.001,e.latLng.lng()+0.001],
      					[e.latLng.lat()+0.001,e.latLng.lng()]];
      				polygon = this.drawPolygon({
      					paths: path,
      					draggable: true,
      					editable: true
      				});
      			}
      		}]
      	});
	   </script>
	   </div>
      <div class="containBelow">
         &nbsp;&nbsp;&nbsp;
         <select name="dropDownBox">
            <option value="Option1">Geofence #1</option>
            <option value="Option2">Geofence #2</option>
         </select>
         <div id="inner">
            <button class="btn">Save New</button>
         </div>
      </div>
      
    </div>
    <script src="js/index.js"></script>

</body>