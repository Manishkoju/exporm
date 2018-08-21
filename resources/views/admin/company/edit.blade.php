@extends('admin.layout.base')
@section('title','Update Company')

@section('content')
{!! Form::model($company, [
    'method' => 'PUT',
    'route' => ['company.update', $company->id,]
]) !!}
   @include('admin.company.partials.companyupdate')
 {{ Form::close() }}

@endsection()