<!-- view/profile/index.blade.php -->
@extends('test')
   
@section('body')
<section class="col-md-9">
    <h1>Profile: {{ $name }}</h1>
    <p>email: {{ $email }}</p>
</section>
@stop