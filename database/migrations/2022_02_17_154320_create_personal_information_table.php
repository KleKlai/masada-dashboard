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
        Schema::create('personal_information', function (Blueprint $table) {
            $table->id();
            $table->string('id_code');
            $table->string('invite_code');
            $table->string('organization');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');
            $table->enum('gender', ['Male', 'Female']);
            $table->string('civil_status');
            $table->string('birth_date');
            $table->string('address_barangay');
            $table->string('address_city');
            $table->string('address_province');
            $table->string('address_region');
            $table->string('address_street');
            $table->string('address_zip_code');
            $table->string('email');
            $table->string('contact_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personal_information');
    }
};
