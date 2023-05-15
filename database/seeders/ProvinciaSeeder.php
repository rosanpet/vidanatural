<?php

namespace Database\Seeders;

use App\Models\Provincia;
use Illuminate\Support\Facades\DB;



use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProvinciaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $provincias = [
            ['id_provincia'=>1,'nombre_provincia'=>'CIUDAD AUTONOMA DE BUENOS AIRES'],
            ['id_provincia'=>2,'nombre_provincia'=>'CHACO'],
            ['id_provincia'=>3,'nombre_provincia'=>'MISIONES'],
            ['id_provincia'=>4,'nombre_provincia'=>'CORDOBA'],
            ['id_provincia'=>5,'nombre_provincia'=>'SALTA'],
            ['id_provincia'=>6,'nombre_provincia'=>'JUJUY'],
            ['id_provincia'=>7,'nombre_provincia'=>'BUENOS AIRES'],
            ['id_provincia'=>8,'nombre_provincia'=>'SANTA FE'],
            ['id_provincia'=>9,'nombre_provincia'=>'FORMOSA'],
            ['id_provincia'=>10,'nombre_provincia'=>'RIO NEGRO'],
            ['id_provincia'=>11,'nombre_provincia'=>'TUCUMAN'],
            ['id_provincia'=>12,'nombre_provincia'=>'SAN LUIS'],
            ['id_provincia'=>14,'nombre_provincia'=>'CATAMARCA'],
            ['id_provincia'=>16,'nombre_provincia'=>'SANTA CRUZ'],
            ['id_provincia'=>17,'nombre_provincia'=>'CHUBUT'],
            ['id_provincia'=>18,'nombre_provincia'=>'MENDOZA'],
            ['id_provincia'=>19,'nombre_provincia'=>'ENTRE RIOS'],
            ['id_provincia'=>20,'nombre_provincia'=>'LA RIOJA'],
            ['id_provincia'=>22,'nombre_provincia'=>'NEUQUEN'],
            ['id_provincia'=>23,'nombre_provincia'=>'CORRIENTES'],
            ['id_provincia'=>24,'nombre_provincia'=>'TIERRA DEL FUEGO'],
            ['id_provincia'=>25,'nombre_provincia'=>'SAN JUAN'],
            ['id_provincia'=>26,'nombre_provincia'=>'SANTIAGO DEL ESTERO'],
            ['id_provincia'=>30,'nombre_provincia'=>'LA PAMPA']
        ];

        foreach ($provincias as $provincia) {
            Provincia::create($provincia);
        }
    }
}
