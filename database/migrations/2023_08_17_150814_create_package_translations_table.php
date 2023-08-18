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
//        Schema::create('article_translations', function (Blueprint $table) {
//            $table->id();
//            $table->timestamps();
//        });

        Schema::create('package_translations', function (Blueprint $table) {
            // mandatory fields
            $table->bigIncrements('id'); // Laravel 5.8+ use bigIncrements() instead of increments()
            $table->string('locale')->index();

            // Foreign key to the main model
            $table->unique(['package_id', 'locale']);
            $table->foreignId('package_id')->constrained('packages')->cascadeOnDelete();

            // Actual fields you want to translate
            $table->string('country');
            $table->text('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('package_translations');
    }
};
