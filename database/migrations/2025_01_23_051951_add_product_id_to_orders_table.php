<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->unsignedBigInteger('product_id')->nullable(); // إضافة عمود product_id
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade'); // إضافة مفتاح خارجي
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down()
    {
        Schema::table('orders', function (Blueprint $table) {
            $table->dropForeign(['product_id']); // حذف المفتاح الخارجي
            $table->dropColumn('product_id'); // حذف العمود في حالة التراجع
        });
    }
};
