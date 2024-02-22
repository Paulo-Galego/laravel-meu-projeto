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
    <a href="{{ route('course.edit',['course' => $course->id])}}"><button type="button">Editar</button></a><br>

    <a href="{{ route('classe.index',['course' => $course->id])}}"><button type="button">Aulas</button></a><br>

    <form action="{{route('course.destroy',['course' => $course->id])}}" method="post">
        @csrf
        @method('delete')
        <button type="submit" onclick="return confirm('Tem certeza que deseja excluir esse registro?')">Apagar</button>
    </form>

  

    <h2>Detalhes do Curso</h2>

    

    @if(session('sucess'))
        <p style="color: #082">
            {{session('sucess')}}
        </p>

    @endif

   
        Id:{{$course->id}}<br>
        Name:{{$course->name}}<br>
        Preço: {{'R$ ' . number_format($course->price,2, ',', '.')}} <br>
        Cadastrado: {{\Carbon\Carbon::parse($course->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s')}} <br>
        Editado: {{\Carbon\Carbon::parse($course->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s')}} <br>



</body>
</html>