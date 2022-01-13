<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddSalarioToEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('empleados', function (Blueprint $table) {
            $table->decimal('salario',$precision = 8, $scale = 2)->after('fecha_cont'); 
            $table->foreignId('cargo_id')->after('id')->references('id')->on('cargos');
        });
    }
    //clases aquellas que empiezan con la primera en mayúscula

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('empleados', function (Blueprint $table) {
            //
        });
    }
}
