<?php
	use App\Kecamatan;
	use App\Proyek;

	$kecamatan=Kecamatan::all();

	$timezone = date_default_timezone_get();
?>
@extends('gishome')
	<link rel="stylesheet" href="assets/print.css" type="text/css" media="print"/>
	<link rel="stylesheet" href="assets/print.css" type="text/css" media="screen"/>
		<div id="kop">
			 {!! Html::image('assets/ruma/img/kop laporan.jpg','a picture', array('style'=>'width:100%; float:left; margin-right:10px')) !!}
		</div>
@section('content')
	<button class="btn btn-warning btn-sm" id="btnprint" onclick="window.print()">Cetak
    </button>
	<table class='table table-bordered'>
		<caption><center><strong>Data Rekapitulasi Proyek 2013-2015</strong></center></caption>
		<thead>
			<tr>
				<th>Kecamatan\Tahun</th>
				<th>2013</th>
				<th>2014</th>
				<th>2015</th>
			</tr>
		</thead>
		<tbody>
			@foreach($kecamatan as $kec)
			<tr>
				<td>{!!$kec->nama!!}</td>
				@for($i=2013;$i<=2015;$i++)
				<?php $jumlah=Proyek::whereRaw("Year(mulai)=$i and id_kecamatan={$kec->id}")->count() ?>
				<td>{!! $jumlah !!}</td>
				@endfor
			</tr>
			@endforeach
		</tbody>
	</table>

	<div class="controls" style="float:right;" id="tertanda">
		<br><br>
       Palembang,  {!! date('d-m-Y',strtotime($timezone)) !!}
       <p>Tertanda,</p>
       <br /><br />
       <p>Admin</p>
    </div>
@stop