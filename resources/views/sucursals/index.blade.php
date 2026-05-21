<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucursales</title>
</head>
<body>

    <div>
        <div>
            <h2>Sucursales</h2>
            <a href="{{ route('sucursals.create') }}" class="btn btn-success">+ Nueva Sucursal</a>
        </div>

        <table border="1" class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Ciudad</th>
                    <th>Direccion Fisica</th>
                    <th>Telefono Contacto</th>
                    <th>Acciones</th>
                </tr>
            </thead>

            <tbody>
                @foreach($sucursals as $sucursal)
                <tr >
                    <td>{{$sucursal->id}}</td>
                    <td>{{$sucursal->ciudad}}</td>
                    <td>{{$sucursal->direccion_fisica}}</td>
                    <td>{{$sucursal->telefono_contacto}}</td>
                    <td class="d-flex gap-2">
                        <a href="{{ route('sucursals.edit', $sucursal) }}" class="btn btn-primary">Editar</a>
                        <form action="{{route('sucursals.destroy',$sucursal)}}" method="POST">
                            @csrf @method('DELETE')
                            <button onclick="return confirm('Eliminar?')" class="btn btn-danger">Eliminar</button>
                        </form>
                    </td>

                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
</body>
</html>