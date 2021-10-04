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
            $table->String('no_sijil_mof')->nullable();
            $table->String('no_rujukan_pendaftaran')->nullable();
            $table->integer('tempoh_sah_laku')->nullable();
            $table->String('staff_ic')->nullable();
            $table->String('staff_nama')->nullable();
            $table->String('staff_jawatan')->nullable();

    
            $table->String('sijil_mof')->nullable();
            $table->String('sijil_perakuan_bumiputera')->nullable();
            $table->String('sijil_pendaftaran_syarikat')->nullable();
            $table->String('sijil_taraf_bumi')->nullable();
            $table->date('tarikh_sah')->nullable();    
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
