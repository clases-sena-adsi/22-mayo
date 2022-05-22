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
              <h2>Crear nuevo usuario</h2>
            <div class="panel panel-primary">
                <div class="panel-body">
                    <form action="{{ route('users.store') }}" method="post">
                        @csrf
                         <div class="form-group">
                             <label for="">Nombre</label>
                             <input type="text" name="nombre" id="nombre" class="form-control" required>
                         </div>
                        <div class="form-group">
                            <label for="">Apellido</label>
                            <input type="text" name="apellido" id="apellido" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">correo</label>
                            <input type="email" name="correo" id="correo" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Fecha nacimiento</label>
                            <input type="date" name="edad" id="edad" class="form-control" required>
                        </div>
                        <button class="btn btn-primary pull-right">Crear Usuario</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
