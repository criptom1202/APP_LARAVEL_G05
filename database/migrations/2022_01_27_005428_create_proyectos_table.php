<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;


class CreateProyectosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyectos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('empleado_id');
            $table->string('proyecto', 100);
            $table->text('descripcion');
            $table->date('fecha_entrega');
            $table->timestamps();

            $table->foreign('empleado_id')->references('id')->on('empleados');
        });

        DB::statement("ALTER TABLE proyectos ADD CONSTRAINT uni_proyecto UNIQUE (proyecto)");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('proyectos');
    }
}
