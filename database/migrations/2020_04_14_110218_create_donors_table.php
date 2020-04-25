<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('name');
            $table->string('phone');
            $table->text('encrypted_phone');
            $table->string('country_code',10);
            $table->string('location')->nullable();
            $table->string('country',50);
            $table->string('zipcode',6);
            $table->text('email')->nullable();
            $table->date('positive_test_date');
            $table->tinyInteger('document')->default(1);
            $table->tinyInteger('fully_recovered')->nullable();
            $table->date('recovery_date')->nullable();
            $table->string('blood_group');
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
        Schema::dropIfExists('donors');
    }
}
