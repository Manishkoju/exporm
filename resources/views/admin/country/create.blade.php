@extends('admin.layout.base')
@section('title','Create Country')
@section('content')
  @foreach ($errors->all() as $error)
     <div class="alert alert-danger" role="alert">
         {{ $error }}
     </div>
  @endforeach
  
{{ Form::open(array('route'=>'country.store','method'=>'POST')) }} 
   @include('admin.country.partials.countrycreate')
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
      @forelse ($countries as $key => $country)
      <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $country->name }}</td>
        <td>{{ $country->status }}</td>
        <td>
            {!! Form::open(['method' => 'DELETE','route' => ['country.destroy', $country->id],'style'=>'display:inline']) !!}
           <button type="submit" class="btn btn-danger"  onclick="return confirm('Are you sure to delete?')">Delete</button>
            {!! Form::close() !!}
            <a class="btn btn-primary" href="{{route('country.edit',['id'=>$country->id])}}">Edit</a>
        </td> 
      </tr>
      @empty
     <h4><strong>No User country.</strong></h4>
    @endforelse
     
    </tbody>
  </table>


@endsection()