@extends('layouts.admin')
@section('title',"Create")
@section('script',asset("js/create.js"))
@section('content')

  <h1>Crear Marca</h1>

  @include('admin.brands.form', [
      'method' => 'post',
      'url' => '/admin/brands',
  ])
@endsection
