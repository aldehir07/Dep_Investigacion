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
        Schema::create('capacitacions', function (Blueprint $table) {
            $table->id();
            $table->string('nombre', 50);
            $table->unsignedBigInteger('unidad_id');
            $table->unsignedBigInteger('analista_id');
            $table->unsignedBigInteger('proveedor_id');
            $table->integer('scafid')->nullable();
            $table->integer('memo')->nullable();
            $table->date('fecha_solicitud')->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->enum('nacional', 'internacional');
            $table->string('nombre_contacto', 30)->nullable();
            $table->string('tipo_pago', 15);
            $table->integer('cant_participantes');
            $table->decimal('valor_unitario');
            $table->decimal('valor_total');
            $table->string('fondo_certificado', 30)->nullable();
            $table->integer('sol_inadeh');
            $table->date('fecha_solicitud_inadeh');
            $table->text('observaciones')->nullable();
            $table->string('memo_daf', 15)->nullable();
            $table->date('fecha_envio_daf')->nullable();
            $table->enum('estatus', ['Completado', 'No Realizado'])->default('En Espera');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('capacitacions');
    }
};
