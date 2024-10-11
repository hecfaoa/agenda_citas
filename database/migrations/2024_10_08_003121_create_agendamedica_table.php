<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('agendamedica', function (Blueprint $table) {
            $table->bigInteger('id_turno')->primary();
            $table->integer('id_medico')->unsigned();
            $table->foreign('id_medico')->references('id')->on('medicos');
            $table->string('dia_semana', 15);
            $table->time('hora_inicio');
            $table->time('hora_fin');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agendamedica');
    }
};
