<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeekersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seekers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->string('phone');
            $table->text('encrypted_phone');
            $table->string('country_code',10);
            $table->text('email');
            $table->string('hospital_name');
            $table->string('hospital_contact_person',100)->nullable();
            $table->string('hospital_contact_number',15)->nullable();
            $table->string('hospital_address');
            $table->string('country',50);
            $table->string('zipcode',6);
            $table->tinyInteger('document')->default(1);
            $table->string('patient_blood_group');
            $table->integer('otp_code')->nullable();
            $table->tinyInteger('is_verified')->default(0);
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
        Schema::dropIfExists('seekers');
    }
}
