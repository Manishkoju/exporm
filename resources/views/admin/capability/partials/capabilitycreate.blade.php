<div class="form-group">
   {{ Form::label('title','Title',['for'=>'title']) }}
   {!! Form::text('title',null,array('class'=>'form-control','placeholder'=>'Enter Capability Title ')) !!}

    @if ($errors->has('title'))
    <span class="invalid-feedback" role="alert">
       <strong>{{ $errors->first('title') }}</strong>
    </span>
    @endif
</div>

<div class="form-group">
   {{ Form::label('status','Status',['for'=>'status']) }}
   {{ Form::radio('status', 1 , true) }}Active
   {{ Form::radio('status',0, false)}}Inactive
</div>

{{ Form::submit('Create',array('class' => 'btn btn-primary')) }}