<style>
	#map-canvas{
		width: 350px;
		height:250px;
	}
</style>

{!!Html::style('assets/bootstrap/js/bootstrap.min.js')!!}
{!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js')!!}
{!!Html::script('http://maps.google.com/maps/api/js?sensor=true')!!}
{!!Html::script('assets/gmaps.js')!!}
{!!Html::style('assets/jquery/jquery-2.0.3.min.js')!!}

<div class="container">
	<div class="col-sm-4">
		<h1>Add Location</h1>
		{!!Form::open(array('url'=>'add', 'files'=>true))!!}
			<div class="form-group">
				<label for="">Title</label>
				<input type="text" class="form-control input-sm" name="title">
			</div>
			<div class="form-group">
				<label for="">Map</label>
				<input type="text" id="searchmap">
				<div id="map-canvas"></div>
			</div>
			<div class="form-group">
				<label for="">Lat</label>
				<input type="text" class="form-control input-sm" name="lat" id="lat">
			</div>
			<div class="form-group">
				<label for="">Lng</label>
				<input type="text" class="form-control input-sm" name="lng" id="lng">
			</div>

			<div class="form-group">
				<label for="">LatLng</label>
				<input type="text" class="form-control input-sm" name="latlng" id="latlng">
			</div>
			<button class="btn btn-sm btn-danger">Save</button>
			{!! Form::close() !!}
	</div>
</div>

<script>
var map = new GMaps({
		    el: '#map-canvas',
		    center:{
		    	lat: -2.981850,
		    	lng: 104.764130
		    },
		    zoom: 15,
		});

var marker =map.addMarker({
			    position:{  
			    	lat: -2.981850,
			      	lng: 104.764130
			    },
			    draggable: true
			});

google.maps.event.addListener(marker, "position_changed", function(event) {
    var lat = this.position.lat();
    var lng = this.position.lng();
 
    $('#lat').val(lat);
	$('#lng').val(lng);	
});

// google.maps.event.addListener(map, 'click', function(event) {
  //  addMarker(event.latLng);
    //document.getElementById('latLng').value = event.latLng;
  //});


/*var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap'));
google.maps.event.addListener(searchBox,'places_changed',function(){
	var places = searchBox.getPlaces();
	var bounds = new google.maps.LatLngBounds();
	var i,place;

		for (i=0; place=places[i];i++) {
			bounds.extend(place.geometry.location);
			marker.setPosition(place.geometry.location);
		};
	map.fitBounds(bounds);
	map.setZoom(15);
});

google.maps.event.addListener(marker,'position_changed',function(){
	var lat = marker.getPosition().lat();
	var lng = marker.getPosition().lng();

	$('#lat').val(lat);
	$('#lng').val(lng);
});*/
</script>