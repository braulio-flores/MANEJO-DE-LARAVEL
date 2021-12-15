<?php

namespace Database\Seeders;

use App\Models\Student;
use Illuminate\Database\Seeder;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // $student = new Student();
        // $student->nombre="braulio";
        // $student->description="estudiante";
        // $student->categoria="ingenieria";

        // $student->save();
        // *USAREMOS UNA FACTORY PARA METER MUCHOS DATOS DE PRUEBA EN LUGAR DE HACER LO DE ARRIBA
        Student::factory(50)->create(); //COMO EL MODELO USA FACTORY PODEMOS HACER USO DEL METODO
    }
}
