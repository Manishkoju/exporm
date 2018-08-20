@extends('admin.layout.base')
@section('title','Update Country')

@section('content')
{!! Form::model($country, [
    'method' => 'PUT',
    'route' => ['country.update', $country->id,],
    'files'=>true
]) !!}
   @include('admin.country.partials.countryupdate')
 {{ Form::close() }}

@endsection()