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
        Schema::create('Private_Lesson', function (Blueprint $table) {
            $table->id();
            $table->date('Start');
            $table->string('Name',30);
            $table->integer('Duration');
            $table->integer('Sport_ID');
            $table->integer('Member_ID');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('Private_Lesson');
    }
};