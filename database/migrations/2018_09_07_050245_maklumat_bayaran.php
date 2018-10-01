<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MaklumatBayaran extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maklumat_bayaran', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namapenuh', 225);
            $table->string('nomborkad', 14);
            $table->date('tarikhbayaran')->nullable();
            $table->string('jumlah', 10)->nullable();
            $table->string('bayar', 10)->nullable();
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
        Schema::dropIfExists('maklumat_bayaran');
    }
}
