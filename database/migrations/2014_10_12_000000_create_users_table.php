<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('namapenuh', 225);
            $table->string('nomborkad', 14)->unique();
            $table->string('alamatrumah', 255);
            $table->date('tarikhlahir');
            $table->string('telrumah', 12);
            $table->string('telpemohon', 12);
            $table->string('namawaris', 225);
            $table->string('telwaris', 12);
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
