<div class="form-group">
   {{ Form::label('name','Name',['for'=>'name']) }}
   {!! Form::text('name',null,array('class'=>'form-control','placeholder'=>'Enter Company Name ')) !!}
</div>

<div class="form-group">
   {{ Form::label('address1','Company Address',['for'=>'address']) }}
   {!! Form::text('address1',null,array('class'=>'form-control','placeholder'=>'Enter Company Address ')) !!}
</div>

<div class="form-group">
   {{ Form::label('address2','Company Address',['for'=>'address']) }}
   {!! Form::text('address2',null,array('class'=>'form-control','placeholder'=>'Enter Company Address ')) !!}
</div>

<div class="form-group">
   {{ Form::label('telephone','Company Address',['for'=>'telephone']) }}
   {!! Form::text('telephone',null,array('class'=>'form-control')) !!}
</div>

 <div class="form-group">
  {{ Form::label('status','Status') }}
  @if( $country->status == 1)
  {{ Form::radio('status', 1 , true) }}Active
  {{ Form::radio('status',0 , false)}}Inactive
  @else
  {{ Form::radio('status', 1 ,false) }}Active
  {{ Form::radio('status',0 ,true)}}Inactive
  @endif
 </div>

{{ Form::submit('Create',array('class' => 'btn btn-success')) }}