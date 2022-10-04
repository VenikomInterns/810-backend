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
        Schema::create('products', function (Blueprint $table) {
            //doesnt have primary key
            $table->string('name')->nullable(); // nullable name?
            $table->string('description')->nullable();
            $table->string('image')->nullable()->nullable();
            $table->string('category_id'); // should be same type as category and be constrained
            $table->timestamp('created_at')->nullable(); //why created_at is nullable?
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
