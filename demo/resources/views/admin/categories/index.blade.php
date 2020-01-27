@extends('layouts.admin')
@section('content')
<div class="container">
<ul class="list-group">
<li class="list-group-item">Categorias
<a href="{{ url('/admin/categories/create') }}">Agregar</a>
</li>

@foreach ($brands as $brand)
<li class="list-group-item">
  {{$category->name}}<a href="/admin/categories/{{$category->id}}">ir</a>
  <form action="{{ url('/admin/categories', ['id' => $category->id]) }}" method="post">
    <button type="button" class="btn btn-danger btn-sm" name="button"><input class="btn btn-default" type="submit" value="Delete" /></button>


@method('delete')
@csrf
</form>
<form action="{{ url('/admin/categories', ['id' => $category->id]) }}" method="post">
 <button type="button" class="btn btn-warning btn-sm" name="button"><input class="btn btn-default" type="submit" value="Edit" /></button>
 @method('post')
 @csrf
</form>
</li>
@endforeach
</ul>
</div>
@endsection
