<form action="{{ url($url) }}" method="post">
    @csrf

    @method( $method )

    <div>
        <label>Nombre</label>
        <input
            type="text" name="name"
            value="{{ old('name', $brand->name) }}"> <br>
           </div>
           <button type="submit">Enviar</button>
</form>
