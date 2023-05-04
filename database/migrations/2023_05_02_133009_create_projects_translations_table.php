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
        Schema::create('projects_translations', function (Blueprint $table) {
            $table->increments('id');
            
            $table->unsignedBigInteger('project_id');
            $table->string('locale')->index();
            $table->string('name');
            $table->string('slug')->nullable();
            $table->text('description');
            $table->unique(['project_id', 'locale']);
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('projects_translations');
    }
};
