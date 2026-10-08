<?php

namespace Database\Seeders;

use App\Models\Ambiente;
use App\Models\Sensor;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        //Ambiente 

        Ambiente::create([
            'nome' => 'Refeitório',
            'descricao' => 'alimentação',
            'status' => true,
        ]);

        Ambiente::create([
            'nome' => 'Diretoria',
            'descricao' => ' diretora e coordenadora',
            'status' => true,
        ]);
        
        Ambiente::create([
            'nome' => 'Pátio',
            'descricao' => ' descanso',
            'status' => false,
        ]);

        //Sensor

        Sensor::create([
            'ambiente_id' => 1,
            'codigo' => 'AHT12',
            'tipo' => 'Temperatura',
            'descricao' => 'Informações necessarias, confiáveis e precisas',
            'status' => true,
        ]);

         Sensor::create([
            'ambiente_id' => 2,
            'codigo' => 'C4101',
            'tipo' => 'Presença',
            'descricao' => 'Sensor compacto e de com alto nivel de desempenho',
            'status' => false,
        ]);

         Sensor::create([
            'ambiente_id' => 3,
            'codigo' => 'A02YYUE',
            'tipo' => 'Ultrassônico',
            'descricao' =>'Sensor que mede distâncias ultrassônicas à prova da água',
            'status' => true,
        ]);

    }
}