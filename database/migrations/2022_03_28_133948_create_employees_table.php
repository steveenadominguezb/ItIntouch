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
        Schema::create('employees', function (Blueprint $table) {
            $table->string('CDE');
            $table->string('Name');
            $table->string('Position');
            $table->string('UserName');
            $table->string('Email');
            $table->string('ContactInfo');
            $table->string('Status');
            $table->boolean('Admin');

            $table->timestamps();

            $table->primary('CDE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
};
