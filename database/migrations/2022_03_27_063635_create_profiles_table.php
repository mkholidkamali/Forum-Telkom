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
        Schema::create('profiles', function (Blueprint $table) {
            $table->id();
            $table->integer('id_user');
            $table->string('nama_lengkap')->length(50)->nullable();
            $table->enum('kelas', ['X', 'XI', 'XII'])->nullable();
            $table->enum('jenis_kelamin', ['l', 'p'])->nullable();
            $table->enum('jurusan', ['TR', 'TJA', 'TKJ', 'RPL'])->nullable();
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
        Schema::dropIfExists('profiles');
    }
};
