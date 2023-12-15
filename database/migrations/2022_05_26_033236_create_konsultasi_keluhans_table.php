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
        Schema::create('konsultasi_keluhans', function (Blueprint $table) {
            $table->id();
            $table->enum('jenis_keluhan', [1,2,3,4,5,6])->comment('1:pemeriksa umum | 2:keluhan pasien | 3:PITC | 4:ibu dan anak | 5:gigi&mlut | 6:konseling GIGI');
            $table->string('email');
            $table->enum('jenis_kelamin', [0, 1])->comment("0: Laki laki | 1:Perempuan");
            $table->integer('usia')->nullable();
            $table->integer('berat_badan')->nullable();
            $table->integer('tinggi_badan')->nullable();
            $table->string('gol_darah', $length = 5)->nullable();
            $table->text('keluhan')->nullable();
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
        Schema::dropIfExists('konsultasi_keluhans');
    }
};
