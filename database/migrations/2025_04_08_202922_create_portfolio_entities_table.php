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
        Schema::create('portfolio_entities', function (Blueprint $table) {
            $table->id();
            $table->string('artist');
            $table->string('title');
            $table->foreignId('file_id')->nullable()->constrained()->onDelete('set null');
            $table->smallInteger('position')->unsigned();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('portfolio_entities');
    }
};
