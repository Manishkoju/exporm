@extends('admin.layout.base')
@section('title','Create Company')
@section('content')
 @foreach ($errors->all() as $error)
     <div class="alert alert-danger" role="alert">
         {{ $error }}
     </div>
  @endforeach
   {{ Form::open(array('route'=>'company.store','method'=>'post')) }}
   @include('admin.company.partials.companycreate')
  {{ Form::close() }}
@endsection()
