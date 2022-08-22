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
        Schema::create('calls', function (Blueprint $table) {
            $table->id();
            $table->String('tamanho');
            $table->boolean('status');
            $table->timestamps();

            $table->unsignedBigInteger('flavor_id');
            $table->unsignedBigInteger('complement_id');

            $table->foreign('flavor_id')
                ->references('id')
                ->on('flavors');

            $table->foreign('complement_id')
                ->references('id')
                ->on('complements');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('calls');
    }
};
