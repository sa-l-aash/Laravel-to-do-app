<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    //creates the table in the database
    public function up(): void
    {
        //'tasks' is the table name
        Schema::create('tasks', function (Blueprint $table) {
            //these will be our columns
            $table->id();//this is the primary key
            $table->string('title');
            $table->longText('description');
            //deadline is a string for flexibility
            $table->string('deadline');
            $table->boolean('isComplete');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    //drops/deletes the table in te database
    public function down(): void
    {
        Schema::dropIfExists('tasks');
    }
};
