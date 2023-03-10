<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::connection('db_user')->create('users', function (Blueprint $table) {
            $table->id();
            $table->string("nim",20);
            $table->string("nama",100);
            $table->string("jurusan",100);
            $table->string("fakultas",100);
            $table->string("alamat",200);
            $table->string("no_telepon",20);
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
};
