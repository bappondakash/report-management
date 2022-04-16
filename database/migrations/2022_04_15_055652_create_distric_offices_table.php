<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDistricOfficesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('distric_offices', function (Blueprint $table) {
            $table->id();
            $table->string('office_name')->nullable();
            $table->string('office_mobile')->nullable();
            $table->string('office_email')->nullable();
            $table->string('office_website')->nullable();
            $table->integer('division_id')->nullable();
            $table->integer('distric_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('distric_offices');
    }
}
