<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos</title>
</head>
<body>
    <h2>Lista os Cursos</h2>
    <a href="{{ route('course.show')}}">Visualizar</a><br>
    <a href="{{ route('course.create')}}">Cadastrar</a><br>
    <a href="{{ route('course.edit')}}">Editar</a><br>
    {{-- <a href="{{ route('course.destroy')}}">Apagar</a><br> --}}
</body>
</html>