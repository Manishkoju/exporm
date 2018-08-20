@extends('admin.layout.base')
@section('title','Create Capability')
@section('content')
@section('title','Company List')
@section('content')
<table class="table table-bordered ">                                                                                   
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Address</th>
        <th>Address</th>
        <th>Telephone</th>
        <th>Status</th>
        <th>Action</th>
      </tr>
    </thead>
    <tbody>
      @forelse ($companies as $key => $company)
      <tr>
        <td>{{ $key + 1 }}</td>
        <td>{{ $company->name }}</td>
        <td>{{ $company->address1 }}</td>
        <td>{{ $company->address2 }}</td>
        <td>{{ $company->telephone }}</td>
        <td>{{ $company->status }}</td>
        <td>
            {!! Form::open(['method' => 'DELETE','route' => ['company.destroy', $company->id],'style'=>'display:inline']) !!}
           <button type="submit" class="btn btn-danger"  onclick="return confirm('Are you sure to delete?')">Delete</button>
            {!! Form::close() !!}
            <a class="btn btn-primary" href="{{route('company.edit',['id'=>$company->id])}}">Edit</a>
        </td> 
      </tr>
      @empty
     <h4><strong>No Company.</strong></h4>
    @endforelse
     
    </tbody>
  </table>


@endsection()