<?php

namespace Database\Seeders;

use App\Models\Classe;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ClassSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if(!Classe::where('name', 'Aula 1')->first()){
            Classe::create([
                'name'=>'Aula 1',
                'description'=>'Aula de laravel, comandos básicos, criação de site, uso de migrations',
                'order_classe'=>1,
                'course_id'=>1
            ]);
        }

        if(!Classe::where('name', 'Aula 2')->first()){
            Classe::create([
                'name'=>'Aula 2',
                'description'=>'Aula de laravel, comandos básicos, criação de site, uso de migrations',
                'order_classe'=>2,
                'course_id'=>1
            ]);
        }

        if(!Classe::where('name', 'Aula 1 B')->first()){
            Classe::create([
                'name'=>'Aula 1',
                'description'=>'Aula de laravel, comandos básicos, criação de site, uso de migrations',
                'order_classe'=>1,
                'course_id'=>2
            ]);
        }

    }
}
