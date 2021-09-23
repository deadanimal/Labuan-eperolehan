<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePerancangansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perancangans',function (Blueprint $table) {

            $table->id();
            $table->String('tahun_pelan')->nullable();
            $table->String('tajuk')->nullable();
            $table->String('perihal')->nullable();
            $table->String('kategori')->nullable();
            $table->String('kaedah')->nullable();
            $table->date('tarikh')->nullable();
            $table->String('amaun')->nullable();
            $table->String('catatan_pengesah')->nullable();
            $table->String('catatan_pelulus')->nullable();
            $table->String('pengesah')->nullable();
            $table->String('pelulus')->nullable();
            $table->String('status')->nullable();
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
        Schema::dropIfExists('perancangans');
    }
}
