<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCountriesTable extends Migration
{
    /**
     * Run the migrations.
     * 
     * @return void
     */
    public function up()
    {
        Schema::create(config('country.countries.table'), function (Blueprint $table) {
            $table->integer('id');
            $table->string(config('country.countries.columns.code'));
            $table->string(config('country.countries.columns.name'));
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
        Schema::dropIfExists(config('country.countries.table'));
    }
}
