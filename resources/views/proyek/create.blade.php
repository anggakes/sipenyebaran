@extends('gishome')

@section('content')

<div class="container">
		<h1>Input Proyek</h1>
	<div class="col-md-4">
	{!! Form::open(['url'=>'proyek']) !!}
		{!! Form::input('hidden','proyek[id_parent]',@$proyek->id,['class'=>'form-control','id'=>'idproyek', 'readonly']) !!}
		@include('proyek.form',['submitButtonText'=>'Save'])
	
	{!! Form::close() !!}
	</div>
	<div id="map-canvas" class="col-md-8" style="height: 625px;"></div>
</div>

@stop

@section('footer')
<script>
function getIdKec(nama){
	 $.ajax({
            url:'{!! url("kecamatanproyek") !!}/'+nama,
            type: 'get',
            dataType: 'json',
        
            success: function(data){
              	if(data==0){
              		alert('daerah belum terdaftar');
              	}
              		$('#kecamatan').val(data);
            }
    });
}

function setKec(lat,lng){
	$.ajax({
            url:"https://maps.googleapis.com/maps/api/geocode/json?latlng="+lat+","+lng+"&key=AIzaSyCa__6FyZEWsQijw6lPR08tQMs1ERDBFes",
        	cache: true
		}).done(function(html){
			var x = html.results[0].formatted_address.split(', ');
			var y = x[1];

			$('#kecam').val(y);
			getIdKec(y);
		});
}

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
	google.maps.event.addListener(marker, "dragend", function(event) {
	    var lat = this.position.lat();
	    var lng = this.position.lng();
	 
	    $('#lat').val(lat);
		$('#lng').val(lng);	
		setKec(lat,lng);
	});
	
	$('#lat').val(lat);
	$('#lng').val(lng);	

}
setMap(
	{!! (!isset($proyek))  ? '-2.96302559' : $proyek->lokasi->lat !!},
	{!! (!isset($proyek))  ? '104.753480' : $proyek->lokasi->lng !!}
	);
setKec(
	{!! (!isset($proyek))  ? '-2.96302559' : $proyek->lokasi->lat !!},
	{!! (!isset($proyek))  ? '104.753480' : $proyek->lokasi->lng !!}
	);
/*$(document).ready(function() {
	
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

});*/
$(document).ready(function() {
	
    $('#lat').change(function(){
        var lat=$('#lat').val();
        var lng=$('#lng').val();
    });

});

</script>
<script type="text/javascript">
$(document).ready(function(){

$("#mulai").change(function(){
	   	$("#akhir").attr("min",$("#mulai").val());
    	$("#akhir").val($("#mulai").val());
    });

@if(!isset($proyek))
$('#kecamatan').prepend('<option selected=true value="" style="visibility:hidden">Pilih Kecamatan</option>');
$("#kecamatan")[0].setAttribute("required", "true");
$('#kontraktor').prepend('<option selected=true  value="" style="visibility:hidden">Pilih Kontraktor</option>');
@endif
$("#kontraktor")[0].setAttribute("required", "required");
});
</script>

@stop