<?php

namespace Database\Seeders;
use App\Models\Admin\Sede;
use Illuminate\Database\Seeder;

class TablaSedeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $sede = Sede::create([
            'nombre_sede' => 'Recep v2.0',
            'direccion' => 'Ciudad del Este - Py.',
            'email' => 'edsonnaza@gmail.com',
            'ruc' => '3375209-5',
            'telefono' =>'0982692225',
            'foto_sede'=> 'wmkZcVBXPrqVEWYmmBpe.jpg'
        ]);
    }
}
