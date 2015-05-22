@extends('gishome')

@section('content')
	<div class="form-group">
			{!! Form::label('kecamatan','Kecamatan :') !!}
			{!! Form::text('x',null,['class'=>'form-control','id'=>'kec', 'readonly']) !!}
	</div>
@stop

@section('footer')
<script>
$.ajax({
	url:"https://maps.googleapis.com/maps/api/geocode/json?latlng=-2.973615, 104.628386&key=AIzaSyCa__6FyZEWsQijw6lPR08tQMs1ERDBFes",
	cache: false
})
.done(function(html) {
	console.log(html.results);
	var x = html.results[0].formatted_address.split(', ');
	var y = x[1];
	$('#kec').val(y);
});
</script>
@stop