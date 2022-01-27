<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        DB::statement('TRUNCATE TABLE cargos');
        DB::statement('TRUNCATE TABLE empleados');
        DB::statement('SET FOREIGN_KEY_CHECKS =  1');
        // $delete = DB::delete('delete from empleados');
        // $delete = DB::delete('delete from cargos');

        date_default_timezone_set("America/Lima");

        // \App\Models\User::factory(10)->create();
        \App\Models\Cargo::factory(5)->create();
        \App\Models\Empleado::factory(5)->create();

    }

}
