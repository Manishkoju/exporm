<div class="form-group">
   {{ Form::label('name','Name',['for'=>'name']) }}
   {!! Form::text('name',null,array('class'=>'form-control','placeholder'=>'Enter name of the Country ')) !!}
</div>

<div class="form-group">
   {{ Form::label('status','Status',['for'=>'status']) }}
   {{ Form::radio('status', 1 , true) }}Active
   {{ Form::radio('status',0, false)}}Inactive
</div>

{{ Form::submit('Create',array('class' => 'btn btn-primary')) }}