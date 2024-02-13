<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos</title>
</head>
<body>
    <br>
    <a href="{{ route('course.index')}}">Listar</a><br>

    <h2>Cadastrar Curso</h2>
   

<form action="{{route('course.store')}}" method="POST">
    
    @csrf   {{--utilizado para segurança no envio do formulario --}}
    @method('POST')
    <label for="Nome">Nome</label>
    <input type="text" name="name" placeholder="Nome do curso" value="{{ old('name')}}" required><br><br>
    <button type="submit">Cadastrar</button>

</form>

</body>
</html>