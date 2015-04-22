<?php

  function formatRupiah($nilai)
{
    $nilaiRp = "";
    $jumlahangka = strlen($nilai);
    while ($jumlahangka > 3) 
    {
        $nilaiRp = "." . substr($nilai,-3) . $nilaiRp;
        $sisaNilai = strlen($nilai) - 3;
        $nilai = substr($nilai, 0, $sisaNilai);
        $jumlahangka = strlen($nilai);
    }

    $nilaiRp = "Rp " . $nilai . $nilaiRp . "";
    return $nilaiRp;
}
?>
@extends('gishome')

@section('content')

  <div id="pointers_map" style="width:100%; height:500px;"></div>

@stop

@section('footer')

<script>   
var map; 
var markers = [];
function setMap(lat, lng, zoom){

    var myLatlng = new google.maps.LatLng(lat, lng);

    map = new GMaps({
        el: '#pointers_map',
        center: myLatlng,
        zoom: zoom,
        zoomControl : true,
        zoomControlOpt: {
            style : 'SMALL',
            position: 'TOP_LEFT'
      },
      panControl : false,
    });

   
}
setMap(-2.96302559,104.753480, 13);

 @foreach($proyek as $proyek)
    <?php
        
        if($proyek->id_parent != null):
        $content="";
        foreach ($proyek->lanjutan($proyek->id_parent) as $i => $p):
            $content.= "Proyek : $p->nama <br> Kontraktor  : ".$p->kontraktor->nama." <br>Kecamatan : ".$p->kecamatan->nama." <br> Nilai : ".formatRupiah($p->nilai)." <br>Mulai : $p->mulai <br> Akhir : $p->akhir <hr>";
        endforeach;
         $content.="Proyek :". $proyek->parent($proyek->id_parent)->nama ."<br> Kontraktor  : ".$proyek->parent($proyek->id_parent)->kontraktor->nama." <br>Kecamatan : ".$proyek->parent($proyek->id_parent)->kecamatan->nama." <br> Nilai : ".formatRupiah($proyek->parent($proyek->id_parent)->nilai)." <br>Mulai :". $proyek->parent($proyek->id_parent)->mulai. "<br> Akhir :". $proyek->parent($proyek->id_parent)->akhir ;
        else:
            $content="Proyek : $proyek->nama <br> Kontraktor  : ".$proyek->kontraktor->nama." <br>Kecamatan : ".$proyek->kecamatan->nama." <br> Nilai : ".formatRupiah($proyek->nilai)." <br>Mulai : $proyek->mulai <br> Akhir : $proyek->akhir ";
        endif;
    ?>
        var marker= map.addMarker({
                lat: '{!! $proyek->lokasi->lat !!}',
                lng: '{!! $proyek->lokasi->lng !!}',
                title: '{!!$proyek->nama!!}',
                infoWindow: {
                  content:'{!!$content!!}'
                }
                });
            markers.push(marker);
    @endforeach

function setAllMap(map) {
  for (var i = 0; i < markers.length; i++) {
    markers[i].setMap(map);
  }
}

$(document).ready(function() {
  
    $('#kecamatanhome').change(function(){
        var isi=$('#kecamatanhome').val();
        $.ajax({
            url:'{!! url("kecamatankordinat") !!}/'+isi,
            type: 'get',
            dataType: 'json',
        
            success: function(data){
                setMap(data.klat,data.klng,data.zoom);
                setmarkerajax();
            }
        });
    });

     $('#tahunhome').change(function(){
        setMap(-2.96302559,104.753480, 13);        
        setmarkerajax();
    });

    function setmarkerajax(){
        var isi=$('#tahunhome').val();
        $.ajax({
            url:'{!! url("tahunproyek") !!}/'+isi,
            type: 'get',
            dataType: 'json',
        
            success: function(data){
                setAllMap(null); 
                for(var ax in data){
                    var marker= map.addMarker({
                    lat: data[ax].lat,
                    lng: data[ax].lng,
                    title: data[ax].nama,
                    infoWindow: {
                      content:'Proyek : '+data[ax].nama+'<br>Kontraktor  : '+data[ax].kontraktor+'<br>Kecamatan : '+data[ax].kecamatan+'<br>Nilai : '+data[ax].nilai+'<br>Mulai : '+data[ax].mulai+'<br>Akhir : '+data[ax].akhir
                    }
                    });
                     markers.push(marker);
                }
            }
        });
    }
});
</script>

@stop