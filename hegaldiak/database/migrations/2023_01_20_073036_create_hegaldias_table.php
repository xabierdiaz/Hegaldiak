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
        Schema::create('hegaldias', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("irteera");
            $table->string("helmuga");
            $table->string("egunaordua");
            $table->string("iraupena");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hegaldias');
    }
};
