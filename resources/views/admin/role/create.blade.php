@extends('admin.layout.base')
@section('title','Create Role')
@section('content')
  @foreach ($errors->all() as $error)
     <div class="alert alert-danger" role="alert">
         {{ $error }}
     </div>
  @endforeach
  
{{ Form::open(array('route'=>'role.store','method'=>'POST')) }} 
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

   <div class="form-group">
     {{ Form::label('capability','Capability',['for'=>'capability']) }}
     @foreach($capabilities as $capability)
      <input type="checkbox" id="inlineCheckbox1" name="capability[]" value="{{$capability->id}}">{{$capability->title}}<br>
     @endforeach
  </div>
  
  {{ Form::submit('Create',array('class' => 'btn btn-primary')) }}

{{ Form::close() }}
<table class="table table-bordered ">                                                                                   
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Slug</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($roles as $key => $role)
      <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $role->name }}</td>
        <td>{{ $role->slug }}</td>
        <td>{{ $role->status }}</td>
        <td>
          {{--   {!! Form::open(['method' => 'DELETE','route' => ['country.destroy', $country->id],'style'=>'display:inline']) !!}
           <button type="submit" class="btn btn-danger"  onclick="return confirm('Are you sure to delete?')">Delete</button>
            {!! Form::close() !!} --}}
            <a class="btn btn-primary" href="{{route('role.edit',['id'=>$role->id])}}">Edit</a>
        </td> 
      </tr>
    @endforeach
    </tbody>
  </table>

@endsection()