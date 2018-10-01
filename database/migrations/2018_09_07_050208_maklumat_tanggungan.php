<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MaklumatTanggungan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('maklumat_tanggungan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('namapenuh', 225);
            $table->string('nomborkad', 14)->unique();
            $table->string('tangnama', 225)->nullable();
            $table->string('tangumur', 2)->nullable();
            $table->string('tangkp', 14)->unique()->nullable();
            $table->string('tanghubungan', 31)->nullable();
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
        Schema::dropIfExists('maklumat_tanggungan');
    }
}
