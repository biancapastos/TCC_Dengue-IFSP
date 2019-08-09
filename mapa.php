<?php include("cabecalho_template.php"); ?>

	<style>
		#map {
			height: 85%;
			width: 97%;
			margin: 10px auto;
			border-radius: 5px;
		  }
		  #floating-panel {
			margin: 80px auto;  
			position: absolute;
			top: 6px;
			left: 35%;
			z-index: 5;
			background-color: #fff;
			padding: 7px;
			border: 1px solid #fff;
			text-align: center;
			font-family: 'verdana','sans-serif';
			font-size: 16px;
			color: gray;
			line-height: 20px;
			padding-left: 10px;
			border-radius: 2px;
		  }
	</style>

</head>

<body>
  
  <div id="main">
	
	<article>
	
	<center>
		<h3 style = "font-family: calibri; font-size: 28px; margin: 17px;">Navegue pelo mapa e veja os casos de dengue marcados na sua cidade!</h3>
	</center>
  
    <!--<div id="floating-panel">
      <input onclick="clearMarkers();" type=button value="Esconder Pontos">
      <input onclick="showMarkers();" type=button value="Mostrar Pontos">
      <input onclick="deleteMarkers();" type=button value="Deletar Pontos">
    </div>-->
	
    <div id="map" style ="border: 3px double #4682B4;"></div>
	
    <script>
           // In the following example, markers appear when the user clicks on the map.
      // The markers are stored in an array.
      // The user can then click an option to hide, show or delete the markers.
      var map;
      var markers = [];
	  var markers_inst = [];


      function initMap() {
        var haightAshbury = {lat: -21.7946, lng: -48.1766}
        var haightAshbury2 = {lat: -21.787608, lng: -48.2068604}

        map = new google.maps.Map(document.getElementById('map'), {
          zoom: 14,
          center: haightAshbury,
          mapTypeId: 'satellite'
        });
/*
        // This event listener will call addMarker() when the map is clicked.
        map.addListener('click', function(event) {
          addMarker(event.latLng);
        });
*/
        // Adds a marker at the center of the map.
        addMarker(haightAshbury);
        addMarker(haightAshbury2);
      }

      // Adds a marker to the map and push to the array.
      function addMarker(location) {
        var marker = new google.maps.Marker({
          position: location,
          map: map
		  
        });
        markers.push(marker);
      }
/*
      // Sets the map on all markers in the array.
      function setMapOnAll(map) {
        for (var i = 0; i < markers.length; i++) {
          markers[i].setMap(map);
        }
      }
      

	*/
    </script>
	
		<script async defer
		src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC_hguo8bOCEnZdv59I2_7qTRH_MteLTw4&callback=initMap">
		</script>

		<div id="mapholder" style = "box-shadow: none; border: none;"> </div>
		
		<input type="hidden" name="posicao" />
		
	</article>
	
<?php include("rodape_template.php"); ?>