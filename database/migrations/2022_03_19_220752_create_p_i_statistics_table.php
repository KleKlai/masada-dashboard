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
        Schema::create('p_i_statistics', function (Blueprint $table) {
            $table->id();
            $table->double('total_registration_masada_representation')->default(0.00);
            $table->integer('total_registration_masada')->default(0);
            $table->double('total_registration_masada_youth_representation')->default(0.00);
            $table->integer('total_registration_masada_youth')->default(0);
            $table->integer('total_verified_registrant')->default(0);
            $table->double('total_organization_representation')->default(0.00);
            $table->integer('total_organization')->default(0);
            $table->double('total_gender_male_representation')->default(0.00);
            $table->integer('total_gender_male')->default(0);
            $table->double('total_gender_female_representation')->default(0.00);
            $table->integer('total_gender_female')->default(0);
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
        Schema::dropIfExists('p_i_statistics');
    }
};
