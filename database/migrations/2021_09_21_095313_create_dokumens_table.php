<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDokumensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dokumens', function (Blueprint $table) {
            $table->id();
            $table->String('sijil_mof')->nullable();
            $table->String('sijil_perbendaharaan')->nullable();
            $table->String('sijil_bumiputera')->nullable();
            $table->String('sijil_taraf')->nullable();
            $table->date('tarikh_sah')->nullable();
            $table->String('rangkaian_perniagaan')->nullable();
            $table->String('no_pendaftaran_cbp')->nullable();
            $table->date('tarikh_kuatkuasa')->nullable();
            $table->date('tarikh_tamat')->nullable();
            $table->String('salinan_kelulusan')->nullable();
            $table->foreignId('id_pembekal')->nullable();
            $table->foreignId('id_bidangkod')->nullable();
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
        Schema::dropIfExists('dokumens');
    }
}
