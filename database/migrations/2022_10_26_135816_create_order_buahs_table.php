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
        Schema::create('order_buahs', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('nohp');
            $table->string('alamat');
            $table->string('namabuah');
            $table->string('jumlahbuah');
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
        Schema::dropIfExists('order_buahs');
    }
};
