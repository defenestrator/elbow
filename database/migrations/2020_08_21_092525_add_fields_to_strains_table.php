<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddFieldsToStrainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('strains', function (Blueprint $table) {
            $table->boolean('clone')->after('lineage')->default(false);
            $table->boolean('autoflower')->after('lineage')->default(true);
            $table->unsignedBigInteger('sire_id')->after('genetics')->nullable();
            $table->foreign('sire_id')->references('id')->on('strains');
            $table->unsignedBigInteger('dam_id')->after('genetics')->nullable();
            $table->foreign('dam_id')->references('id')->on('strains');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('strains', function (Blueprint $table) {
            //
        });
    }
}
