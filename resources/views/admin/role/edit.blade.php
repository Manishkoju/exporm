@extends('admin.layout.base')
@section('title','Update Role')
@section('content')
  @foreach ($errors->all() as $error)
     <div class="alert alert-danger" role="alert">
         {{ $error }}
     </div>
  @endforeach
  
{{ Form::open() }} 
  <div class="form-group">
     {{ Form::label('name','Name',['for'=>'name']) }}
     {!! Form::text('name',null,array('class'=>'form-control','placeholder'=>'Enter Role Name ')) !!}
  </div>

  <div class="form-group">
     {{ Form::label('slug','Slug',['for'=>'slug']) }}
     {!! Form::text('slug',null,array('class'=>'form-control')) !!}
  </div>

  <div class="form-group">
     {{ Form::label('status','Status',['for'=>'status']) }}
     {{ Form::radio('status', 1 , true) }}Active
     {{ Form::radio('status',0, false)}}Inactive
  </div>

   {{-- <div class="form-group">
     {{ Form::label('capability','Capability',['for'=>'capability']) }}
     @foreach($capabilities as $capability)
      <input type="checkbox" id="inlineCheckbox1" name="capability[]" value="{{$capability->id}}">{{$capability->title}}<br>
     @endforeach
  </div> --}}
  
  {{ Form::submit('Create',array('class' => 'btn btn-primary')) }}

{{ Form::close() }}

@endsection()