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
        Schema::create('invoice', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('penerima');
            $table->string('alamat');
            $table->date('tanggal');
            $table->char('id_method');
            $table->bigInteger('biaya_penanganan');
            $table->integer('diskon');
            $table->bigInteger('biaya_pengiriman');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('invoice');
    }
};
