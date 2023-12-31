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
            $table->id()->autoincrement();
            $table->string('title');
            $table->string('firstname')->nullable();
            $table->string('surname');
            $table->float('price');
            $table->text('description');
            $table->float('pages');
            $table->string('image');
            // $table->string('category')->default('natural');
            $table->string('category');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
