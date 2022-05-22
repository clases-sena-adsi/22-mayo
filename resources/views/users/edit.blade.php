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

        </div>
    </div>
</div>
</body>
</html>
