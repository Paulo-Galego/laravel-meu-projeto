<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Course;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    //Listar as aulas
    public function index(Course $course)
    {
       
        $classes = Classe::with('course')->where('course_id',$course->id)->orderBy('order_classe')->get();

       return view('classes.index', ['classes'=>$classes, 'course' =>$course]);
    }

    public function show(Classe $classe)
    {
        //Carregar a view
        return view('classes.show',['classe'=>$classe]);
    }

    //Método responsável em carregar cadastrar nova aula
    public function create(Course $course)
    {
            //Carregar a view
            return view('classes.create', ['course'=>$course]);
    }

    //Cadastrar no banco de dados a nova aula
    public function store(Request $request)
    {
       
        //Recuperar a última ordem do curso enviado no request
        $lastOrderClasse = Classe::where('course_id', $request->course_id)->OrderByDesc('order_classe')->first();

        $classe = Classe::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'order_classe'=>$lastOrderClasse->order_classe + 1,
            'course_id'=>$request->course_id
        ]);   
        
        return redirect()->route('classe.index',['course'=>$request->course_id])->with('sucess','Aula cadastrada com sucesso!');
    }

    public function edit(Classe $classe){
        //Carregar a view
        return view('classes.edit', ['classe'=> $classe]);
    }


    public function update(Request $request, Classe $classe)
    {
        //Editar as informações do registro no banco de dados
        $classe->update([
                'name'=> $request->name,
                'description'=> $request->description,
        ]);


        //Redirecionar o usuário e enviar uma mensagem de sucesso.
        return redirect()->route('classe.index', ['course' =>$classe->course_id])->with('sucess','Aula editada com sucesso!');

    }

    public function destroy(Classe $classe)
    {
        //Excluir o registro do banco de dados
        $classe->delete();
        
        //Redirecionar o usuário, enviar mensagem de sucesso
        return redirect()->route('classe.index', ['course' => $classe->course_id])->with('sucess', 'Aula excluída com sucesso!');

    }

}
