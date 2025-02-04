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
        Schema::create('tags', function (Blueprint $table) {
            $table->id();  // مفتاح أساسي تلقائي
            $table->string('name')->nullable()->unique();
            // اسم العلامة (Tag) ويجب أن يكون فريدًا
            $table->timestamps(); // تاريخ الإنشاء والتحديث

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tags');
    }
};
