@extends('gishome')

@section('content')
<h1>Tambah Kontraktor Baru</h1>
<hr/>

	{!! Form::open(['url'=>'kontraktor']) !!}

		@include('kontraktor.form',['submitButtonText'=>'Tambah Kontraktor'])
	
	{!! Form::close() !!}

	@include('errors.list')

@stop