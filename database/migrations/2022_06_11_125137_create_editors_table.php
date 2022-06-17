<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEditorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('editors', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug')->unique();
            $table->text('avatar')->nullable();
            
            $table->string('email')->unique()->nullable();
            $table->string('phone')->unique()->nullable();
            $table->string('designation')->nullable();
            $table->string('university')->nullable();
            
            $table->string('department')->nullable();
            $table->text('description')->nullable();
            $table->integer('country_id')->index()->unsigned();
            $table->integer('journal_id')->index()->unsigned();
            $table->integer('meta_id')->index()->unsigned();
            $table->boolean('status');
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
        Schema::dropIfExists('editors');
    }
}
