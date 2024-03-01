<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Aulas</title>
</head>
<body>
    <a href="{{ route('classe.index', ['course' => $classe->course_id])}}"><button type="button">Listar</button></a><br><br>
    <a href="{{ route('classe.edit',['classe' => $classe->id])}}"><button type="button">Editar</button></a><br>
   

    <h2>Detalhes da Aula</h2>

    

    @if(session('sucess'))
        <p style="color: #082">
            {{session('sucess')}}
        </p>

    @endif

   
        Id:{{$classe->id}}<br>
        Nome:{{$classe->name}}<br>
        Descrição: {{$classe->description}} <br>
        Ordem: {{$classe->order_classe}} <br>
        Curso: {{$classe->course->name}} <br>

        Cadastrado: {{\Carbon\Carbon::parse($classe->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s')}} <br>
        Editado: {{\Carbon\Carbon::parse($classe->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s')}} <br>

<br>
<br>
        



</body>
</html>