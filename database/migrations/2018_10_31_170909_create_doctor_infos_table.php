<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDoctorInfosTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('doctor_infos', function (Blueprint $table) {
            $table->increments('DOCTOR_ID');
             $table->string('USER_ID');
            $table->string('DOCTOR_NAME');
            $table->string('DOCTOR_DESIGNATION');
            $table->string('DOCTOR_DEPARTMENT');
            $table->dateTime('DOCTOR_BIRTH_DATE');
            $table->dateTime('DOCTOR_JOINING_DATE');
            $table->longText('DOCTOR_INFORMATION');
//            $table->string('DOCTOR_PROFILE_PICTURE')->default(0);
            $table->boolean('STATUS')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        Schema::dropIfExists('doctor_infos');
    }

}
