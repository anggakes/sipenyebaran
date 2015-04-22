@extends('gishome')

@section('content')
	<h1>Edit: {!! $proyek-> nik !!} </h1>
	<div class="col-md-4">
	{!! Form::open(['method'=>'PATCH','action'=>  ['ProyekController@update',$proyek->id]]) !!}
		
		@include('proyek.form',['submitButtonText'=>'Ubah Proyek'])
	
	{!! Form::close() !!}
	</div>
		<div id="map-canvas" class="col-md-8" style="height: 625px;"></div>
	</div>
@stop

@section('footer')
<script>

function setMap(lat, lng){

		var myLatlng = new google.maps.LatLng(lat, lng);

	var map = new GMaps({
		    el: '#map-canvas',
		    center: myLatlng,
		    zoom: 15,
		});
	
	var marker =map.addMarker({
			    position:myLatlng,
			    draggable: true
			});
	google.maps.event.addListener(marker, "position_changed", function(event) {
	    var lat = this.position.lat();
	    var lng = this.position.lng();
	 
	    $('#lat').val(lat);
		$('#lng').val(lng);	
	});
	
	$('#lat').val(lat);
	$('#lng').val(lng);	

}
setMap({!!$proyek->lokasi->lat!!},{!!$proyek->lokasi->lng!!});

$(document).ready(function() {
	
    $('#kecamatan').change(function(){
        var isi=$('#kecamatan').val();
        $.ajax({
            url:'{!! url("kecamatankordinat") !!}/'+isi,
            type: 'get',
            dataType: 'json',
        
            success: function(data){
              	setMap(data.klat,data.klng);
            }
        });
    });

});
</script>
<script type="text/javascript">
$("#mulai").change(function(){
	   	$("#akhir").attr("min",$("#mulai").val());
    	$("#akhir").val($("#mulai").val());
    });
</script>
@stop