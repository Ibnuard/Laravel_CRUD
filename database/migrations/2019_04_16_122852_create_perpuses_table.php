<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerpusesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perpuses', function (Blueprint $table) {
            $table->increments('id');
            $table->string('p_judul');
            $table->string('p_penerbit');
            $table->integer('p_tahun');
            $table->string('p_pengarang');
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
        Schema::dropIfExists('perpuses');
    }
}
