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
    <a href="{{ route('classe.index',['course'=>$course->id])}}"><button type="button">Listar</button></a><br>

    <h2>Cadastrar Aula</h2>

    @if(session('error'))
    <p style="color: #f00">
        {{session('error')}}
    </p>
    @endif


   

<form action="{{route('classe.store')}}" method="POST">
    
    @csrf   {{--utilizado para segurança no envio do formulario --}}
    @method('POST')

    <input type="hidden" name="course_id" id="course_id" value="{{$course->id}}">

    <label for="Nome">Nome</label>
    <input type="text" name="name" id="price" placeholder="Nome da aula" value="{{ old('name')}}" required><br><br>
    
    <label for="Descrição">Descrição</label>
    <textarea name="description" id="description" cols="30" rows="4" {{old('description')}}></textarea><br><br>


    
    



    <button type="submit">Cadastrar</button>

</form>

</body>
</html>