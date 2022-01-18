<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTable extends Migration
{

    public function up()
    {
        Schema::create('user', function (Blueprint $table) {
            $table->id();
            $table->string('name',50);
            $table->string('family',50);
            $table->string('email',50);
            $table->string('phone',50);
            $table->longText('address',50);
            $table->timestamps();
        });
    }


    public function down()
    {
        Schema::dropIfExists('user');
    }
}