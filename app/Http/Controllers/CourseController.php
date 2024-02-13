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
    public  function show(Request $request){

    //Recuperar as informações do curso
    $course =  Course::where('id', $request->courseId)->first();

        return view('courses.show', ['course' => $course]);
    }

   //Carregar formulario cadastrar novo curso
    public  function create(){
        return view('courses.create');
    }
    //Cadastrar no banco de dados novo curso
    public  function store(Request $request){
      
      // Course::create($request->all()); //dessa forma cadastra todos os campos
      Course::create(['name' => $request->name]);
      
        //Redirecionar o usuário, enviar mensagem de sucesso
       return redirect()->route('course.show')->with('sucess','Curso cadastrado com sucesso');
    }

    //Carregar formulario pata editar curso
    public  function edit(){
        return view('courses.edit');
    }
    //Editar no banco de dados o curso
    public  function update(){
       dd("Editar no banco de dados o curso");
    }

    //Excluir no banco de dados o curso
    public  function destroy(){
        dd("Excluir no banco de dados o curso");
     }


}
