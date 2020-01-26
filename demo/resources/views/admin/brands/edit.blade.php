@extends('layouts.admin')
@section('title',"Edit")
@section('script',asset("js/create.js"))
@section('content')
<h1>Editar Marca</h1>

@include('admin.brands.form', [
    'method' => 'patch',
    'url' => '/admin/brands/' . $brand->id
])
@endsection
