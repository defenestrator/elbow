<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DefuckulatePivotTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('team_roles', function (Blueprint $table) {
            $table->renameColumn('plan_id', 'team_id');
        });
        Schema::table('team_roles', function (Blueprint $table){
            $table->renameColumn('feature_id', 'role_id');
        });
        Schema::table('team_role_users', function (Blueprint $table) {
            $table->renameColumn('plan_id', 'team_id');
            $table->unsignedInteger('user_id');
        });
        Schema::table('team_role_users', function (Blueprint $table){
            $table->renameColumn('feature_id', 'role_id');
        });
        Schema::create('role_users', function (Blueprint $table) {
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('user_id');
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
        Schema::dropIfExists('users_roles');
    }
}
