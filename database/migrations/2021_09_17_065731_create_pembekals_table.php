<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembekalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembekals', function (Blueprint $table) {
            $table->id();
            $table->String("jenis_akaun")->nullable();
            $table->String("no_pendaftaran")->nullable();
            $table->String("nama_pemilik")->nullable();
            $table->String("kewarganegaraan")->nullable();
            $table->String("jenis_pengenalan")->nullable();
            $table->String("kad_pengenalan")->nullable();
            $table->String("nama_perniagaan")->nullable();
            $table->String("lokasi")->nullable();
            $table->String("email")->nullable();
            $table->String("tarikh_penubuhan")->nullable();
            $table->String("no_cukai")->nullable();
            $table->String("alamat")->nullable();
            $table->String("poskod")->nullable();
            $table->String("negeri")->nulable();
            $table->String("negara")->nullable();
            $table->String("daerah")->nullable();
            $table->String("bandar")->nullable();
            $table->String("no_pejabat")->nullable();
            $table->String("no_tel")->nullable();
            $table->String("no_faks")->nullable();
            $table->String("nama_bank")->nullable();
            $table->String("no_akaun")->nullable();
           
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
        Schema::dropIfExists('pembekals');
    }
}
