
<!DOCTYPE html>
<html>
  <head>
    <title>Mapa</title>
    <style>
      
      #map {
        height: 80%;
		width:80%;
		margin: 5px auto;
      }
     <!-- html, body {
        height: 80%;
        margin: 50px auto;
        padding: 0;
      }-->

    </style>
  </head>
  <body>
  
    <div id="map"></div>
    <p>Click on the map to add markers.</p>
    <script>

      // In the following example, markers appear when the user clicks on the map.
      // The markers are stored in an array.
      // The user can then click an option to hide, show or delete the markers.
      var map;
      var markers = [];
	  var markers_inst = [];


      function initMap() {
        var haightAshbury = {lat: -21.7946, lng: -48.1766};

        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: haightAshbury,
          mapTypeId: 'satellite'
        });

        // This event listener will call addMarker() when the map is clicked.
        map.addListener('click', function(event) {
          addMarker(event.latLng);
        });

        // Adds a marker at the center of the map.
        addMarker(haightAshbury);
      }

      // Adds a marker to the map and push to the array.
      function addMarker(location) {
        var marker = new google.maps.Marker({
          position: location,
          map: map
		  
        });
        markers.push(marker);
      }

      // Sets the map on all markers in the array.
      function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
      }
      

	  
    </script>
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_hguo8bOCEnZdv59I2_7qTRH_MteLTw4&callback=initMap">
    </script>
	</center>
</div>
<div id="mapholder" style = "box-shadow: none; border: none;"> </div>

<!--
	<div id = "mapa">
	
	<center>

	<hr />
		<p id="demo">
		Clique no botão para obter sua localização:
		</p>
		<button onclick="getLocation()">Clique aqui</button>
	<hr />

	

<script src="http://maps.google.com/maps/api/js?key=AIzaSyC_hguo8bOCEnZdv59I2_7qTRH_MteLTw4"></script> 

<script>
var x=document.getElementById("demo");
function getLocation()
  {
  if (navigator.geolocation)
    {
      navigator.geolocation.getCurrentPosition(showPosition,showError);
    }
  else{
      x.innerHTML="Geolocalização não é suportada nesse browser.";
    }
  }
 
function showPosition(position)
  {
  lat=position.coords.latitude;
  lon=position.coords.longitude;
  latlon=new google.maps.LatLng(lat, lon);

  lat1=position.coords.latitude+100;
  lon1=position.coords.longitude+100;
  latlon2=new google.maps.LatLng(lat1, lon1);

  lat2=position.coords.latitude+200;
  lon2=position.coords.longitude+200;
  latlon3=new google.maps.LatLng(lat2, lon2);

  mapholder=document.getElementById('mapholder')
  mapholder.style.height='800px';
  mapholder.style.width='100%';
 
  var myOptions={
                  center:latlon,
                  zoom:15,
                  mapTypeId:google.maps.MapTypeId.ROADMAP,
                  mapTypeControl:true,
  navigationControlOptions:{style:google.maps.NavigationControlStyle.SMALL}
  };
  
  var map=new google.maps.Map(document.getElementById("mapholder"),myOptions);
  
  var marker1=new google.maps.Marker({position:latlon,map:map,title:"Marc 1"});
 
  }
 
function showError(error)
  {
  switch(error.code) 
    {
    case error.PERMISSION_DENIED:
      x.innerHTML="Usuário rejeitou a solicitação de Geolocalização."
      break;
    case error.POSITION_UNAVAILABLE:
      x.innerHTML="Localização indisponível."
      break;
    case error.TIMEOUT:
      x.innerHTML="O tempo da requisição expirou."
      break;
    case error.UNKNOWN_ERROR:
      x.innerHTML="Algum erro desconhecido aconteceu."
      break;
    }
  }
</script>

	</center>
</div>
<div id="mapholder" style = "box-shadow: none; border: none;"> </div>

-->

