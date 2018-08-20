<div class="form-group">
   {{ Form::label('title','Title',['for'=>'title']) }}
   {!! Form::text('title',null,array('class'=>'form-control','placeholder'=>'Enter Capability Title ')) !!}
   <div class="error">{{ $errors->first('title') }}</div>
</div>

<div class="form-group">
   {{ Form::label('status','Status',['for'=>'status']) }}
   {{ Form::radio('status', 1 , true) }}Active
   {{ Form::radio('status',0, false)}}Inactive
</div>

{{ Form::submit('Create',array('class' => 'btn btn-primary')) }}