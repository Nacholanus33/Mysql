<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<ul>
  @foreach ($products as $product)
    <li>
      {{$product->name}} <a href="/products/{{$product->id}}">ir</a>
    </li>
  @endforeach
</ul>

  </body>
</html>
