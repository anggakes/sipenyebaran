<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Test</title>
	<link rel="stylesheet" href="">
	{!!Html::style('assets/bootstrap/js/bootstrap.min.js')!!}
	{!!Html::style('assets/jquery/jquery-2.0.3.min.js')!!}
	{!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js')!!}
	{!!Html::script('http://maps.google.com/maps/api/js?sensor=true')!!}
	<!--{!!Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyCa__6FyZEWsQijw6lPR08tQMs1ERDBFes')!!}-->
	{!!Html::script('assets/gmaps.js')!!}

	<!--<script type="text/javascript">
      function initialize() {
        var mapOptions = {
          center: { lat: -2.981850, lng: 104.764130},
          zoom: 13
        };
        var map = new google.maps.Map(document.getElementById('map-canvas'),
            mapOptions);
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script> -->

<script>		
	$(document).ready(function(){
 		var map = new GMaps({
		    el: '#pointers_map',
		    lat: -2.981850,
		    lng: 104.764130,
		    zoom: 13,
		    zoomControl : true,
		    zoomControlOpt: {
		        style : 'SMALL',
		        position: 'TOP_LEFT'
			},
	    panControl : false,
		});
 		@foreach($proyek as $proyek)
		map.addMarker({
	      lat: '{!! $proyek->lokasi->lat !!}',
	      lng: '{!! $proyek->lokasi->lng !!}',
	      title: '{!!$proyek->nama!!}',
	      draggable : true,
	      infoWindow: {
	        content:'Proyek : {!! $proyek->nama !!}<br>Kontraktor  : {!! $proyek->kontraktor->nama !!}<br>Kecamatan : {!! $proyek->kecamatan->nama !!}<br>Nilai : {!! $proyek->nilai !!}'
	    	}
		});
		@endforeach

		 var flightPlanCoordinates = [
			    new google.maps.LatLng(-2.977940, 104.724856),
			    new google.maps.LatLng(-2.944340, 104.807425),
			    new google.maps.LatLng(-2.918110, 104.760561),
			    new google.maps.LatLng(-2.977940, 104.724856)
			  ];
			  var flightPath = new google.maps.Polyline({
			    path: flightPlanCoordinates,
			    geodesic: true,
			    strokeColor: '#FF0000',
			    strokeOpacity: 1.0,
			    strokeWeight: 2
			  });

			  flightPath.setMap(map);
	});
</script>

</head>
<body>
<div id="pointers_map" style="width:100%; height:500px;"></div>
</body>

</html>