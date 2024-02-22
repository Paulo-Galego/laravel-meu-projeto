<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use PHPUnit\Framework\Constraint\Count;

class CourseController extends Controller
{
    //Listar cursos
    public function index(){
        //dd('listar os cursos'); //var dump...

        //Recuperar os registros do banco de dadso
        $courses=Course::orderByDesc('created_at')->paginate(10);
        


        //Carregar view
        return view('courses.index',['courses' => $courses]);
    }

    //Detalhes do curso
    public  function show(Request $request, Course $course){

    //Recuperar as informações do curso
    //$course =  Course::where('id', $request->course)->first();

        return view('courses.show', ['course' => $course]);
    }

   //Carregar formulario cadastrar novo curso
    public  function create(){
        return view('courses.create');
    }
    //Cadastrar no banco de dados novo curso
    public  function store(Request $request){
      
      // Course::create($request->all()); //dessa forma cadastra todos os campos
      $course=Course::create(['name' => $request->name, 'price'=> $request->price]);
      
        //Redirecionar o usuário, enviar mensagem de sucesso
       return redirect()->route('course.show',['course'=>$course->id])->with('sucess','Curso cadastrado com sucesso');
    }

    //Carregar formulario pata editar curso
    public  function edit(Request $request, Course $course){

        //$course= Course::where('id', $request->course)->first();
        //dd($course);
        return view('courses.edit', ['course' => $course]);
    }
    //Editar no banco de dados o curso
    public  function update(Request $request, Course $course){

       $course->update([
        'name' => $request->name,
        'price' => $request->price,
        ]);
       //Redirecionar o usuário
       return redirect()->route('course.show', ['course' => $request->course])->with('sucess','Curso editado com sucesso');
       
    }

    //Excluir no banco de dados o curso
    public  function destroy(Course $course){
        
        //Exclui registro no banco de dados
        $course->delete();

        return redirect()->route('course.index')->with('success','Curso excluído com sucesso');
     }


}
