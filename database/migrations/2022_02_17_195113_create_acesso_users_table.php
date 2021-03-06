<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcessoUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acesso_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('acesso_id')->unsigned();
            $table->bigInteger('user_id')->unsigned();
            $table->foreign('acesso_id')->references('id')->on('acessos');
            $table->foreign('user_id')->references('id')->on('users');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('acesso_user');
    }
}
