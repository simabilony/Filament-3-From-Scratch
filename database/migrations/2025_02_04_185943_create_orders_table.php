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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_completed')->default(false);
            $table->decimal('price', 10, 2)->nullable(); // إضافة عمود price
            $table->unsignedBigInteger('product_id')->nullable(); // إضافة عمود product_id
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade'); // إضافة مفتاح خارجي
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
