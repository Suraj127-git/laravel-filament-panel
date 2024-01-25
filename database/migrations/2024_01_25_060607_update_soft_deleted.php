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
        Schema::table('employees', function (Blueprint $table) {
            $table->softDeletes(); // This will add a 'deleted_at' column to the 'employees' table
        });

        Schema::table('departments', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('cities', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('states', function (Blueprint $table) {
            $table->softDeletes();
        });

        Schema::table('countries', function (Blueprint $table) {
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('employees', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('departments', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('cities', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('states', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });

        Schema::table('countries', function (Blueprint $table) {
            $table->dropSoftDeletes();
        });
    }
};
