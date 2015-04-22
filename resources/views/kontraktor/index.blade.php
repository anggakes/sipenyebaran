@extends('gishome')

@section('content')
@include('flash::message')
<h1>Kontraktor</h1>
 <a class="btn btn-primary pull-right" id="sign"  href="{!! route('kontraktor.create') !!}"><i class="icon-g-circle-plus"></i>Tambah</a>
    <table class='table' id='datatables'>
        <thead>
        <tr>
          <th>Id</th>
          <th>Nama</th>
          <th>#</th>
        </tr>
        </thead>
        <tbody>
          
        </tbody>
    </table>
@stop

@section('footer')

 {!!Html::script("assets/Laravel/laravel.methodHandler.js")!!}
  
 <script type="text/javascript">    

    $(document).ready(function(){

          $("#datatables").dataTable({
              "ajax" : "{!! route('kontraktor.datatables') !!}"}).on('draw.dt',function(){
                  //inisialisi saat datatables setelah load
                   $('a[data-method]').click(function(e){
                      handleMethod(e,$(this));
                      e.preventDefault();
                   });
                });
    });

    $('div.alert').not('.alert-important').delay(3000).slideUp(300);
     
 </script>
 @stop

