<h1>Editar Marca</h1>

@include('admin.brands.form', [
    'method' => 'patch',
    'url' => '/admin/brands/' . $brand->id
])
