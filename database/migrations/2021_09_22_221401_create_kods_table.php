<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKodsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kods', function (Blueprint $table) {
            $table->id();
            $table->String('jenis_kod')->nullable();
            $table->String('kategori_kod')->nullable();
            $table->String('pengkhususan_kod')->nullable();
            $table->String('deskripsi_kod')->nullable();

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
        Schema::dropIfExists('kods');
    }
}
