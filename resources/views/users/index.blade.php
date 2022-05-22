<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ url('users') }}" class="list-group-item">Consultar Todos los usuarios</a>
                <a href="{{ url('users/create') }}" class="list-group-item">Crear nuevo usuario</a>
            </div>
        </div>
        <div class="col-md-9">
              <h2>Listado de todos los usuarios</h2>

            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <thead>
                    <tr>
                        <th>NOMBRE</th>
                        <th>APELLIDO</th>
                        <th>CORREO</th>
                        <th>EDAD</th>
                        <th>ACCIONES</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($users as $user)
                     <tr>
                         <td>{{ $user->nombre }}</td>
                         <td>{{ $user->apellido }}</td>
                         <td>{{ $user->correo }}</td>
                         <td>{{ $user->edad }}</td>
                         <td>
                             <a href="" class="btn btn-info btn-sm">Detalles</a>
                             <a href="" class="btn btn-warning btn-sm">Editar</a>
                             <a href="" class="btn btn-danger btn-sm">Eliminar</a>
                         </td>
                     </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>

        </div>
    </div>
</div>
</body>
</html>
