<?php 
use App\Kecamatan;
  $kecamatanhome=Kecamatan::lists('nama','id');

  $tahun=['2013'=>'2013','2014'=>'2014','2015'=>'2015'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />

    <title>Sistem Informasi Penyebaran Proyek Dinas PU</title>

 <style type="text/css">
  .comments { min-height:550px;height:auto; }
 </style>

    {!!Html::style('assets/bootstrap/css/bootstrap.css')!!}
    {!!Html::style('assets/ruma/css/font-awesome.min.css')!!} 
    {!!Html::style('assets/ruma/css/style.css')!!}  
    {!!Html::style('http://fonts.googleapis.com/css?family=Open+Sans')!!} 
    {!!Html::script('https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js')!!} 
    <!--{!!Html::script('http://maps.google.com/maps/api/js?sensor=true')!!}-->
    {!!Html::script('https://maps.googleapis.com/maps/api/js?key=AIzaSyCa__6FyZEWsQijw6lPR08tQMs1ERDBFes')!!}
    {!!Html::script('assets/gmaps.js')!!}
    {!!Html::style('assets/sb-admin-2.css')!!}
    {!!Html::style('assets/bootstrap/js/bootstrap.min.js')!!}
    {!!Html::style('assets/jquery/jquery-2.0.3.min.js')!!}
    {!!Html::style("assets/datatables/jquery.dataTables.css")!!}

<!--https://maps.googleapis.com/maps/api/js?key=AIzaSyCa__6FyZEWsQijw6lPR08tQMs1ERDBFes-->
 @yield('header')
</head>
<body >
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 {!! Html::image('assets/ruma/img/logo dinas pu.jpg','a picture', array('style'=>'width:45px; float:left; margin-right:10px')) !!}
                <a class="navbar-brand" href="{!!URL::to('')!!}">Dinas Pekerjaan Umum Kota Palembang</a>
            </div>
            <div class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::guest())
                      @include('menu')
                      <li><a href="{{ url('/auth/login') }}">LOGIN</a></li>
                    @else
                      <li><a href="{{ url('/admin') }}">ADMIN</a></li>
                      @include('menu')
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->username }} <span class="caret"></span></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
                        </ul>
                      </li>
                    @endif
                </ul>
            </div>
           
        </div>
    </div>
   <!--/.NAVBAR END-->
   
        <section id="konten">
            <div class="container">
              <br>
                          @yield('content')
              <br>
            </div>
        </section>

   
    <section id="footer-sec" >
             
          <div class="container">
           <div class="row  pad-bottom" id='footer'>
            <div class="col-md-4">
                <h4> <strong>ABOUT COMPANY</strong> </h4>
                            <p>
                               Dinas Pekerjaan Umum adalah unsur pelaksana Pemerintah Daerah 
                               yang mempunyai tugas melaksanakan sebagian urusan Pemerintahan Daerah berdasarkan azas otonomi dan tugas pembantuan di bidang Pekerjaan Umum.
                            </p>
                </div>
               <div class="col-md-4">
                    <h4> <strong>CONTACT US</strong> </h4>
                   <p>
                     <a href="https://www.facebook.com/pages/Dinas-Pekerjaan-Umum-BM-PSDA-Kota-Palembang/319047598177854?fref=ts" target="_blank"><i class="fa fa-facebook-square fa-3x"  ></i></a>  
                     <br>
                         Telp. (0711 710033) / (0711 710305)   
                   </p>
                </div>
                  <div class="col-md-4">
                     <h4> <strong>OUR LOCATION</strong> </h4>
                        <p>
                         Jl. Slamet Riady No, 213<br>
                         Palembang
                        </p>
                  </div>
               </div>
            </div>
      <div id="copyright" class="container" style="height:50px;">
        <ul class="menu">
          &copy; Sistem Penyebaran Proyek Pembangunan. All rights reserved.
        </ul>
      </div>
    </section>         
    {!!HTML::script('assets/ruma/plugins/jquery-1.10.2.js')!!}
    {!!HTML::script('assets/ruma/plugins/bootstrap.js')!!}  
    {!!Html::script("assets/datatables/jquery.dataTables.js")!!}
    @yield('footer')

    <script type="text/javascript">
    $('#kecamatanhome').prepend('<option selected=true style="visibility:hidden">KECAMATAN</option>');
    $('#tahunhome').prepend('<option selected=true style="visibility:hidden">TAHUN</option>');
    
</script> 
</body>
</html>