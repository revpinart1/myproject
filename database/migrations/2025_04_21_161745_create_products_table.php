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
            $table->string('name');
            $table->string('description');
            $table->decimal('price',8,2);
            $table->integer('stock');
            $table->foreignId('categories_id')->constrained()->delete('cascade');
            $table->string('image')->nullable();
            $table->timestamps();
        });
    }

    /**
     * بالنسبه للفورين كي او المفتاج الاجنبي انا حطيت عليه حذف الكاسكيد يصير لما يحذف المسخدم فئة من جدول الفئات كاتيقوريز رح تنحذف كل الحقول المرتبطه ب جدول البرودكت
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
