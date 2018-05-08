<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');  //漸增, int 10
            $table->string('name');  //varchar 255
            $table->string('email')->unique();  //varchar 255
            $table->string('password');  //varchar 255
            $table->rememberToken();  //新增 remember_token 字段，varchar 100，內容為10位隨機數
            $table->timestamps();  //建立created_at 和 updated_at 字段, timestamp, 2016-11-01 23:33:06
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
