@extends('admin.layout.base')
@section('title','Update Capability')

@section('content')
{!! Form::model($capability, [
    'method' => 'PUT',
    'route' => ['admin.capability.update', $capability->id,],
    'files'=>true
]) !!}
   @include('admin.capability.partials.capabilityupdate')
 {{ Form::close() }}

@endsection()