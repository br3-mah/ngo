<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateIntervensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('intervensions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->foreignId('module_id')->nullable()->index();
            $table->string('name');
            $table->string('description')->nullable();
            $table->string('type')->nullable();
            $table->string('slug')->nullable();
            $table->integer('status_id')->default(1);
            $table->foreignId('team_id');
            $table->foreignId('user_id');
            $table->timestamps();
        });
    }

     
    /**
     * Reverse the migrations.
     ** @return void
     */
    public function down()
    {
        Schema::dropIfExists('intervensions');
    }
}
