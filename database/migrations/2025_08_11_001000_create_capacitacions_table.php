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
            $table->unsignedBigInteger('capacitacion_id')->nullable();
            $table->unsignedBigInteger('unidad_id')->nullable();
            $table->unsignedBigInteger('analista_id')->nullable();
            $table->unsignedBigInteger('proveedor_id')->nullable();
            $table->integer('scafid')->nullable();
            $table->integer('memo')->nullable();
            $table->date('fecha_solicitud')->nullable();
            $table->date('fecha_inicio');
            $table->date('fecha_final');
            $table->enum('N_I', ['nacional', 'internacional']);
            $table->string('nombre_contacto', 30)->nullable();
            $table->integer('tel_contacto')->nullable();
            $table->string('tipo_pago', 15);
            $table->integer('cant_participantes');
            $table->integer('evento')->nullable();
            $table->decimal('valor_unitario')->nullable();
            $table->decimal('valor_total')->nullable();
            $table->string('fondo_certificado', 30)->nullable();
            $table->integer('sol_inadeh')->nullable();
            $table->date('fecha_solicitud_inadeh')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('memo_daf', 15)->nullable();
            $table->date('fecha_envio_daf')->nullable();
            $table->enum('estatus', ['Completado', 'No Realizado', 'En Espera'])->default('En Espera');

            //LLaves Foraneas
            $table->foreign('unidad_id')->references('id')->on('unidads');
            $table->foreign('analista_id')->references('id')->on('analistas');
            $table->foreign('proveedor_id')->references('id')->on('proveedors');
            $table->foreign('capacitacion_id')->references('id')->on('add_capacitacions');

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
