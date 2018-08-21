@extends('admin.layout.base')
@section('title','Create Company Admin')

@section('content')
   {{ Form::open() }}
    @include('admin.companyadmin.partials.admincreate')
   {{ Form::close()}}

@endsection()