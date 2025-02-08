<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('client_registrations', function (Blueprint $table) {
            $table->id();
            $table->string('client_name')->nullable();
            $table->string('branch_name')->nullable();
            $table->string('client_code')->nullable()->unique();
            $table->string('client_id')->nullable();
            $table->string('application_type')->nullable();
            $table->string('kyc_number')->nullable();
            $table->string('account_type')->nullable();

            // ===== Add more columns for first person =====
            $table->string('prefix')->nullable();
            $table->string('first_name')->nullable();
            $table->string('middle_name')->nullable();
            $table->string('last_name')->nullable();

            // ===== Add more columns for Maiden person =====
            $table->string('maiden_prefix')->nullable();
            $table->string('maiden_first_name')->nullable();
            $table->string('maiden_middle_name')->nullable();
            $table->string('maiden_last_name')->nullable();

            // ===== Add more columns for Father/Spouse =====
            $table->string('father_prefix')->nullable();
            $table->string('father_first_name')->nullable();
            $table->string('father_middle_name')->nullable();
            $table->string('father_last_name')->nullable();

            // ===== Add more columns for Mother =====
            $table->string('mother_prefix')->nullable();
            $table->string('mother_first_name')->nullable();
            $table->string('mother_middle_name')->nullable();
            $table->string('mother_last_name')->nullable();
            
            $table->string('date_of_birth')->nullable();
            $table->string('gender')->nullable();
            $table->string('marital_status')->nullable();
            $table->string('citizenship')->nullable();
            $table->string('residenital_status')->nullable();
            $table->string('occupation_type')->nullable();
            $table->string('profile_pic')->nullable();

            $table->integer('inserted_by')->nullable();
            $table->timestamp('inserted_at')->nullable();
            $table->integer('modified_by')->nullable();
            $table->timestamp('modified_at')->nullable();
            $table->integer('deleted_by')->nullable();
            $table->timestamp('deleted_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('client_registrations');
    }
};
