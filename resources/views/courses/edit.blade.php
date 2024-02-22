<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cursos</title>
</head>
<body>
    <a href="{{ route('course.index')}}"><button type="button">Listar</button></a><br>
     <a href="{{ route('course.show',['course'=>$course->id])}}"><button type="button">Visualizar</button></a><br>
   
     <form action="{{route('course.destroy',['course' => $course->id])}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir esse registro?')">Apagar</button>
    </form>




    <h2>Editar Curso</h2>

<form action="{{route('course.update',['course' => $course->id])}}" method="post">
    @csrf
    @method('PUT')

    <label>Nome:</label>
    <input type="text" name="name" id="name" placeholder="Nome do curso" value="{{old('name', $course->name)}}" required><br><br>
    
    <label>Preço:</label>
    <input type="text" name="price" id="price" placeholder="Usar o '.' para separar o real" value="{{old('price', $course->price)}}" required><br><br>


    
    <button type="submit">Salvar</button>
</form>

    
</body>
</html>