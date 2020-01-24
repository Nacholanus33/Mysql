<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <meta charset="utf-8">
    <script src="../../../public/js/java.js">

    </script>
    <title></title>
  </head>
  <body>
<ul class="list-group">
  <li class="list-group-item">Marcas
    <a href="{{ url('/admin/brands/create') }}">Agregar</a>
  </li>

  @foreach ($brands as $brand)
    <li class="list-group-item">
      {{$brand->name}}<a href="/admin/brands/{{$brand->id}}">ir</a>
      <form action="{{ url('/admin/brands', ['id' => $brand->id]) }}" method="post">
        <button type="button" class="btn btn-danger btn-sm" name="button"><input class="btn btn-default" type="submit" value="Delete" /></button>


    @method('delete')
    @csrf
   </form>
   <form action="{{ url('/admin/brands', ['id' => $brand->id]) }}" method="post">
     <button type="button" class="btn btn-warning btn-sm" name="button"><input class="btn btn-default" type="submit" value="Edit" /></button>
     @method('post')
     @csrf
   </form>
    </li>
  @endforeach
</ul>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
