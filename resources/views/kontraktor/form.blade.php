		<div class="form-group">
			{!! Form::label('nama','Nama :') !!}
			{!! Form::text('nama',null,['class'=>'form-control']) !!}
		</div>

		<div class="form-group">
			{!! Form::submit($submitButtonText,['class'=>'btn btn-primary form-control']) !!}
		</div>
	
	