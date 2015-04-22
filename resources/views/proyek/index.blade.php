@extends('gishome')

@section('content')
@include('flash::message')
<h1>Proyek</h1>
 <a class="btn btn-primary pull-right" id="sign"  href="{!! route('proyek.create') !!}"><i class="icon-g-circle-plus"></i>Tambah</a>
 <a class="btn btn-warning btn-sm pull-left" id="request"  href="{!! URL::to('laporan') !!}"><i class="icon-g-circle-plus"></i>Request Data Rekapitulasi Proyek</a>
    <table class='table' id='datatables'>
        <thead>
        <tr>
          <th>Id</th>
          <th>Nama</th>
          <th>Kecamatan</th>
          <th>Kontraktor</th>
           <th>Mulai</th>
          <th>Akhir</th>
           <th>Nilai</th>
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
              "ajax" : "{!! route('proyek.datatables') !!}"}).on('draw.dt',function(){
                   $('a[data-method]').click(function(e){
                      handleMethod(e,$(this));
                      e.preventDefault();
                   });
            }); 

    });
   
    $('div.alert').not('.alert-important').delay(3000).slideUp(300);  
 </script>
 @stop