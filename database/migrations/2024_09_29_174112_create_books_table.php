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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->string('Book_Title');
            $table->string('Book_Author')->nullable;
            $table->integer('Book_Print_Num')->nullable;
            $table->integer('Book_Price')->nullable;
            $table->string('Book_description')->nullable;
            $table->string('Book_Quantity')->nullable;
            $table->string('Book_Img')->nullable;
            $table->string('Book_Author_Img')->nullable;
            $table->foreignId('category_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
