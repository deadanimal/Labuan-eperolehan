<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCidbsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cidbs', function (Blueprint $table) {
            $table->id();
            $table->String('sijil_perakuan')->nullable();
            $table->String('sijil_gred')->nullable();
            $table->String('bidangkod')->nullable();
            $table->Date('tarikh_sah')->nullable();
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
        Schema::dropIfExists('cidbs');
    }
}
