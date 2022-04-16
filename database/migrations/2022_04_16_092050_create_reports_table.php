<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reports', function (Blueprint $table) {
            $table->id();
            $table->string('column_one')->nullable();
            $table->string('column_two')->nullable();
            $table->string('column_three')->nullable();
            $table->string('column_four')->nullable();
            $table->string('column_five')->nullable();
            $table->string('column_six')->nullable();
            $table->string('column_seven')->nullable();
            $table->string('column_eight')->nullable();
            $table->string('column_nine')->nullable();
            $table->string('column_ten')->nullable();
            $table->string('column_eleven')->nullable();
            $table->string('column_twelve')->nullable();
            $table->string('column_thirteen')->nullable();
            $table->string('column_fourteen')->nullable();
            $table->string('column_fifteen')->nullable();
            $table->string('column_sixteen')->nullable();
            $table->string('column_seventeen')->nullable();
            $table->integer('fiscal_year')->nullable();
            $table->integer('month')->nullable();
            $table->integer('report_type')->nullable();
            $table->integer('status')->nullable();
            $table->integer('desk')->nullable();
            $table->integer('user_id')->nullable();
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
        Schema::dropIfExists('reports');
    }
}
