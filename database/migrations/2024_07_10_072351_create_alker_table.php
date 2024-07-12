<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alker', function (Blueprint $table) {
            $table->id();
            $table->string('merk');
            $table->string('sn')->nullable();
            $table->string('kondisi');
            $table->string('foto')->nullable(); // Ubah menjadi nullable jika foto boleh kosong
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alker');
    }
};

