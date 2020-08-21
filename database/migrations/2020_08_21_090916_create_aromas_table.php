<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAromasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aromas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
        });

        Schema::create('smellables', function (Blueprint $table) {
            $table->id();
            $table->morphs('smellable');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('aromas');
        Schema::dropIfExists('smellables');
    }
}
