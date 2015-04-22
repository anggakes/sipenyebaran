		<div class="form-group">
			{!! Form::label('lat','Lattitude :') !!}
			{!! Form::text('lokasi[lat]',@$proyek->lokasi->lat,['class'=>'form-control','id'=>'lat', 'readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('lng','Longitude :') !!}
			{!! Form::text('lokasi[lng]',@$proyek->lokasi->lat,['class'=>'form-control','id'=>'lng', 'readonly']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('kecamatan','Kecamatan :') !!}
			{!! Form::select('proyek[id_kecamatan]', $kecamatan, @$proyek->id_kecamatan, ['id'=>'kecamatan', 'class'=>'form-control'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('nama_proyek','Proyek :') !!}
			{!! Form::text('proyek[nama]',@$proyek->nama,['class'=>'form-control','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('kontraktor','Kontraktor :') !!}
			{!! Form::select('proyek[id_kontraktor]', $kontraktor,@$proyek->id_kontraktor, ['id'=>'kontraktor', 'class'=>'form-control'])!!}
		</div>

		<div class="form-group">
			{!! Form::label('mulai','Mulai :') !!}
			{!! Form::input('date','proyek[mulai]',@$proyek->mulai,['class'=>'form-control', 'id'=>'mulai','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('akhir','Akhir :') !!}
			{!! Form::input('date','proyek[akhir]',@$proyek->akhir,['class'=>'form-control', 'id'=>'akhir','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::label('nilai','Nilai Proyek :') !!}
			{!! Form::input('number','proyek[nilai]',@$proyek->nilai,['class'=>'form-control','required']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>
	