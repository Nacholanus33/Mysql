    @extends('layouts.admin')
@section('content')
  <div class="container-fluid">
    <ul class="list-group">
    <div class="row">
      <div class="col-12 sinpadding">
       <li class="list-group-item">
         <div class="marca">


         Marcas
</div>

           <button type="button" class = "btn btn-primary d-inline-flex add" name="button"><a class = "agregar" href="{{ url('/admin/brands/create') }}">Agregar</a></button>
         </li>
         </div>
           </div>
  @foreach ($brands as $brand)
    <div class="row">
    <li class="list-group-item">
      <div class="col-6">


      Nombre: {{$brand->name}}<a href="/admin/brands/{{$brand->id}}">ir</a>
      </div>
      <div class="col-2">
      <form action="{{ url('/admin/brands', ['id' => $brand->id]) }}" method="post">
        <input class="btn btn-default red" type="submit" value="Delete" />


    @method('delete')
    @csrf
   </form>
 </div>
   <div class="col-2">
   <form action="{{ url('/admin/brands', ['id' => $brand->id]) }}" method="post">
    <input class="btn btn-default yellow" type="submit" value="Edit" />
     @method('post')
     @csrf
   </form>
   </div>
    </li>
    </div>
  @endforeach
</ul>
</div>
@endsection
