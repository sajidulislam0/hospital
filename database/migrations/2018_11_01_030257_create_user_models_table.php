<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserModelsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {
        Schema::create('user_info', function (Blueprint $table) {
            $table->increments('USER_ID');
            $table->string('USERNAME');
            $table->string('EMAIL_ADDRESS')->unique();
            $table->string('PASSWORD');
            $table->string('USER_ROLE');
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
        Schema::dropIfExists('user_info');
    }

}
