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
 <a href="{{route('course.index')}}" class=""><button type="button">Cursos</button></a><br><br>

 <a href="{{route('classe.create',['course' => $course->id])}}" class=""><button type="button">Cadastar</button></a><br><br>


    <h2>Lista os Aulas</h2>


    @if(session('sucess'))
    <p style="color: #082">
        {{session('sucess')}}
    </p>

@endif
    
    @forelse($classes as $classe)
        Id: {{$classe->id}} <br>
        Nome: {{$classe->name}} <br>
        Ordem: {{$classe->order_classe}} <br>
        Curso: {{$classe->course->name}} <br>
      

        Cadastrado: {{\Carbon\Carbon::parse($classe->created_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s')}} <br>
        Editado: {{\Carbon\Carbon::parse($classe->updated_at)->tz('America/Sao_Paulo')->format('d/m/Y H:i:s')}} <br>
      <br>
      <br>
        <a href="{{route('classe.show',['classe'=> $classe->id])}}"><button type="button">Visualizar</button></a><br><br>
        <a href="{{route('classe.edit',['classe'=> $classe->id])}}"><button type="button">Editar</button></a><br><br>

        <form action="{{route('classe.destroy',['classe' => $classe->id])}}" method="post">
            @csrf
            @method('delete')
            <button type="submit" onclick="return confirm('Tem certeza que deseja apagar esse registro?') ">Apagar</button>
        </form>

        <hr>
    @empty
        <p style="color: #f00">Nenhum aula encontrada</p>
    @endforelse


        
   

</body>
</html>