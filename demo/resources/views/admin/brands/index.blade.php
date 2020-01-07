<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
<ul>
  @foreach ($brands as $brand)
    <li>
      {{$brand->name}} <a href="/brands/{{$brand->id}}">ir</a>
    </li>
  @endforeach
</ul>

  </body>
</html>
