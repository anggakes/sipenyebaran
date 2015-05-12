@extends('gishome')

@section('content')
	<h1>Edit: {!! $kontraktor-> nama !!} </h1>
	{!! Form::model($kontraktor, ['method'=>'PATCH','action'=>  ['KontraktorController@update',$kontraktor->id]]) !!}
		
		@include('kontraktor.form',['submitButtonText'=>'Ubah Kontraktor'])
	
	{!! Form::close() !!}

	@include('errors.list')
@stop