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

       return view('classes.index', ['classes'=>$classes]);
    }

    public function show(Classe $classe)
    {
        //Carregar a view
        return view('classes.show',['classe'=>$classe]);
    }
}
