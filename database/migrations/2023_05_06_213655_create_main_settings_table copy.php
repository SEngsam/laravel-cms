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
        Schema::create('main_settings', function (Blueprint $table) {
            $table->id();
            $table->string('website_name_ar');
            $table->string('website_name_en');
            $table->text('website_description_ar');
            $table->text('website_description_en');
            $table->text('website_adress_ar');
            $table->text('website_adress_en');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('main_settings');
    }
};
