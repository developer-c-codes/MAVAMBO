<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('p_name');
            $table->string('category');
            $table->integer('price')->change();
            $table->integer('stock')->change();
            $table->string('image');
            $table->string('description');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
     
    Schema::table('products', function (Blueprint $table) {
        $table->string('price')->change();
        $table->string('stock')->change();
    });
    }
};
