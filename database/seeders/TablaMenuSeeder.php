<?php

namespace Database\Seeders;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class TablaMenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        $menus = [
            array('id' => '1', 'menu_id' => '6', 'nombre' => 'Menus', 'url' => 'admin/menu', 'orden' => '3', 'icono' => 'fa fa-book', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '2', 'menu_id' => '6', 'nombre' => 'Menu Rol', 'url' => 'admin/menu-rol', 'orden' => '4', 'icono' => 'fa fa-registered', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '3', 'menu_id' => '6', 'nombre' => 'Roles', 'url' => 'admin/rol', 'orden' => '5', 'icono' => 'fa fa-check-square', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '4', 'menu_id' => '6', 'nombre' => 'Permisos', 'url' => 'admin/permiso', 'orden' => '6', 'icono' => 'fa fa-key', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '5', 'menu_id' => '6', 'nombre' => 'Usuarios', 'url' => 'admin/usuario', 'orden' => '1', 'icono' => 'fa fa-users', 'created_at' => $now, 'updated_at' => $now),
            //array('id' => '6', 'menu_id' => '10', 'nombre' => 'Libros', 'url' => 'libro', 'orden' => '10', 'icono' => NULL, 'created_at' => $now, 'updated_at' => $now),
            //array('id' => '7', 'menu_id' => '10', 'nombre' => 'Libro prestamo', 'url' => 'libro-prestamo', 'orden' => '11', 'icono' => NULL, 'created_at' => $now, 'updated_at' => $now),
            array('id' => '6', 'menu_id' => '0', 'nombre' => 'Panel de Control', 'url' => '#', 'orden' => '1', 'icono' => 'fa fa-cogs', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '7', 'menu_id' => '6', 'nombre' => 'Permiso Rol', 'url' => 'admin/permiso-rol', 'orden' => '7', 'icono' => 'fa fa-toggle-on', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '8', 'menu_id' => '0', 'nombre' => 'Catastros', 'url' => '#', 'orden' => '2', 'icono' => 'fa fa-list fa-sm', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '9', 'menu_id' => '8', 'nombre' => 'Seguros', 'url' => 'seguro', 'orden' => '8', 'icono' => 'fa fa-credit-card', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '10', 'menu_id' => '6', 'nombre' => 'Sedes', 'url' => 'admin/sede', 'orden' => '2', 'icono' => 'fa fa-building', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '11', 'menu_id' => '8', 'nombre' => 'Tipo Persona', 'url' => 'tipo_persona', 'orden' => '3', 'icono' => 'fa fa-users', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '12', 'menu_id' => '8', 'nombre' => 'Especialidad', 'url' => 'especialidad', 'orden' => '4', 'icono' => 'fa fa-stethoscope', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '13', 'menu_id' => '8', 'nombre' => 'Estado Civil', 'url' => 'estado-civil', 'orden' => '5', 'icono' => 'fa fa-gavel', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '14', 'menu_id' => '8', 'nombre' => 'Profesion', 'url' => 'profesion', 'orden' => '6', 'icono' => 'fa-id-card', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '15', 'menu_id' => '8', 'nombre' => 'Tipo DNI', 'url' => 'tipodni', 'orden' => '7', 'icono' => 'fa-address-card', 'created_at' => $now, 'updated_at' => $now),
            //array('id' => '18', 'menu_id' => '10', 'nombre' => 'Pacientes', 'url' => 'paciente', 'orden' => '2', 'icono' => 'fa fa-users', 'created_at' => $now, 'updated_at' => $now),
            //array('id' => '19', 'menu_id' => '10', 'nombre' => 'Médicos', 'url' => 'medico', 'orden' => '5', 'icono' => 'fa fa-user-md', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '16', 'menu_id' => '8', 'nombre' => 'Colaboradores', 'url' => 'persona', 'orden' => '1', 'icono' => 'fa fa-users', 'created_at' => $now, 'updated_at' => $now),
            array('id' => '17', 'menu_id' => '8', 'nombre' => 'Departamentos', 'url' => 'departamentos', 'orden' => '9', 'icono' => 'fa fa-building', 'created_at' => $now, 'updated_at' => $now),
           // array('id' => '17', 'menu_id' => '8', 'nombre' => 'Almacenes', 'url' => 'unidad', 'orden' => '8', 'icono' => 'fa fa-cart-plus', 'created_at' => $now, 'updated_at' => $now),
            //array('id' => '18', 'menu_id' => '8', 'nombre' => 'Categorias Gral', 'url' => 'categoriapadre', 'orden' => '9', 'icono' => 'fa fa-list-alt', 'created_at' => $now, 'updated_at' => $now),
            //array('id' => '24', 'menu_id' => '10', 'nombre' => 'Consultas/Servicios', 'url' => 'productos', 'orden' => '7', 'icono' => 'fas fa-pager', 'created_at' => $now, 'updated_at' => $now),
            //array('id' => '25', 'menu_id' => '10', 'nombre' => 'Medicamentos/Descartables', 'url' => 'articulos', 'orden' => '8', 'icono' => 'fas fa-pills', 'created_at' => $now, 'updated_at' => $now),
            //array('id' => '26', 'menu_id' => '0', 'nombre' => 'Farmacia Interna', 'url' => '#', 'orden' => '3', 'icono' => 'fas fa-dolly', 'created_at' => $now, 'updated_at' => $now),
            //array('id' => '27', 'menu_id' => '0', 'nombre' => 'Académico', 'url' => '#', 'orden' => '1', 'icono' => 'fas fa-book', 'created_at' => $now, 'updated_at' => $now),
            //array('id' => '28', 'menu_id' => '27', 'nombre' => 'Ingresar Exámen', 'url' => 'ingresarexamen', 'orden' => '1', 'icono' => 'fas fa-edit', 'created_at' => $now, 'updated_at' => $now)
   
        ];
        DB::table('menu')->insert($menus);
    }
}