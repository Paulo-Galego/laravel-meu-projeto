<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aulas</title>
</head>
<body>
    
    <a href="{{ route('classe.index',['course' => $classe->course_id])}}"><button type="button">Listar</button></a><br><br>
    <a href="{{ route('classe.show',['classe' => $classe->id])}}"><button type="button">Visualizar</button></a><br>
   


    <h2>Editar Aulas</h2>

    <form action="{{route('classe.update',['classe' => $classe->id])}}" method="post">
        @csrf
        @method('PUT')
    
        <label>Nome:</label>
        <input type="text" name="name" id="name" placeholder="Nome da aula" value="{{old('name', $classe->name)}}" required><br><br>
        
        <label>Descrição:</label>
        <textarea name="description" id="description" cols="30" rows="4">{{old('name', $classe->description)}}</textarea><br><br>
        
       <button type="submit">Salvar</button>
    </form>


    
</body>
</html>