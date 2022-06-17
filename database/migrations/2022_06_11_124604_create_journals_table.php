<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->string('sku')->unique();
            $table->string('title');
            $table->text('url');
            $table->text('info')->nullable();
            $table->string('impact_factor')->nullable();
            $table->text('citations_report_url');
            $table->integer('category_id')->index()->unsigned();
            $table->integer('user_id')->index()->unsigned();
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
        Schema::dropIfExists('journals');
    }
}
