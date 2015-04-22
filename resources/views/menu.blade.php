<li>
	{!! Form::select('tahun', $tahun,null,['id'=>'tahunhome', 'class'=>'form-control', 'style'=>'background:transparent; color:white; border: transparent; margin-top: 7px'] ) !!}
</li>
<li>
	{!! Form::select('proyek[id_kecamatan]', $kecamatanhome, null, ['id'=>'kecamatanhome', 'class'=>'form-control', 'style'=>'background:transparent; color:white; border: transparent; margin-top: 7px'])!!}
</li>