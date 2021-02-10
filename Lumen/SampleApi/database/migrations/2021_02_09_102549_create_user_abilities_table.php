<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserAbilitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_abilities', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('level')->default(1);
            $table->unsignedInteger('hp')->default(25);
            $table->unsignedInteger('mp')->default(0);
            $table->unsignedInteger('attack')->default(15);
            $table->unsignedInteger('protect')->default(15);
            $table->unsignedInteger('speed')->default(15);
            $table->unsignedBigInteger('user_id');

            // 外部キー制約
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_abilities');
    }
}
