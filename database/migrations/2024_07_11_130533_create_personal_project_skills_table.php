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
        Schema::create('personal_project_skills', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->string('personal_project_id');
            $table->string('name');
            $table->timestamps();

            $table->foreign('personal_project_id')->references('id')->on('personal_projects')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_project_skills');
    }
};
