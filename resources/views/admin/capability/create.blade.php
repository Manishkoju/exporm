@extends('admin.layout.base')
@section('title','Create Capability')
@section('content')
{{-- @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif --}}
  
{{ Form::open(array('route'=>'capability.store','method'=>'POST')) }} 
   @include('admin.capability.partials.capabilitycreate')
{{ Form::close() }}
<table class="table table-bordered ">                                                                                   
    <thead>
      <tr>
        <th>ID</th>
        <th>Title</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($capabilities as $key => $capability)
      <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $capability->title }}</td>
        <td>{{ $capability->status }}</td>
        <td>
            {!! Form::open(['method' => 'DELETE','route' => ['capability.destroy', $capability->id],'style'=>'display:inline']) !!}
           <button type="submit" class="btn btn-danger"  onclick="return confirm('Are you sure to delete?')">Delete</button>
            {!! Form::close() !!}
            <a class="btn btn-primary" href="{{route('capability.edit',['id'=>$capability->id])}}">Edit</a>
        </td> 
      </tr>
      @empty
     <h4><strong>No User Capability.</strong></h4>
    @endforelse
     
    </tbody>
  </table>


@endsection()