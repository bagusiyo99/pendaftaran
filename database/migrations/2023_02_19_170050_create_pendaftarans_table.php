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
        Schema::create('pendaftarans', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->text('nama');
            $table->text('email')->unique();
            $table->text('alamat');
            $table->string('telpon', 13)->unique(); // Batasan panjang 13 digit
            $table->string('jk'); // Kolom "jenis kelamin" dengan tipe data string
            $table->text('gambar');
            $table->text('pesan');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pendaftarans');
    }
};
