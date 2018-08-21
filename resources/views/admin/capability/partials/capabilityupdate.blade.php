<div class="form-group">
   {{ Form::label('title','Title',['for'=>'title']) }}
   {!! Form::text('title',null,array('class'=>'form-control')) !!}
</div>


 <div class="form-group">
  {{ Form::label('status','Status') }}
  @if( $capability->status == 1)
  {{ Form::radio('status', 1 , true) }}Active
  {{ Form::radio('status',0 , false)}}Inactive
  @else
  {{ Form::radio('status', 1 ,false) }}Active
  {{ Form::radio('status',0 ,true)}}Inactive
  @endif
 </div>

{{ Form::submit('Create',array('class' => 'btn btn-success')) }}