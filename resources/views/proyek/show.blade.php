@extends('app')

@section('content')

<h1>{{ $karyawan->nama }}</h1>
<div>
	{{ $karyawan->nik }}
</div>

@stop

