<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CourseController extends Controller
{
    //Listar cursos
    public function index(){
        //dd('listar os cursos'); //var dump...

        //Carregar view
        return view('courses.index');
    }

    //Detalhes do curso
    public  function show(){
        return view('courses.show');
    }

   //Carregar formulario cadastrar novo curso
    public  function create(){
        return view('courses.create');
    }
    //Cadastrar no banco de dados novo curso
    public  function store(){
       dd("Cadastrar no banco de dados novo curso");
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
