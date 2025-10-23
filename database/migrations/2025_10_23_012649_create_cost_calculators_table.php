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
        Schema::create('cost_calculators', function (Blueprint $table) {
            $table->id();
            $table->string('business_type');
            $table->string('company_reason');
            $table->integer('company_owners');
            $table->integer('visas_required');
            $table->string('office_type');
            $table->string('start_date');
            $table->string('jurisdiction');
            $table->boolean('living_in_uae');
            $table->boolean('dependents_visas_needed');
            $table->string('nationality');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email');
            $table->string('phone');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cost_calculators');
    }
};
