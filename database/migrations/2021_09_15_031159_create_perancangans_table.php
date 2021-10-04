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
            $table->String('tajuk_perolehan')->nullable();
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

            $table->String('catatan_batal')->nullable();
            $table->String('nilai_perolehan_keseluruhan')->nullable();
            $table->float('peruntukan_tahunan')->nullable();
            $table->date('tarikh_perlaksanaan_iklan')->nullable();
            $table->date('tarikh_penyediaan_spesifikasi')->nullable();
            $table->date('tarikh_penyediaan_doc_tender')->nullable();
            $table->date('tarikh_penilaian_tender')->nullable();
            $table->date('tarikh_perlaksanaan_persidangan')->nullable();
            $table->date('tarikh_sst_dikeluarkan')->nullable();





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
