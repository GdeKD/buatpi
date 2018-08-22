<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersIdentitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('UsersIdentities', function (Blueprint $table) {
            // $table->increments('id');
            $table->bigInteger('nkk')->unsigned();
            $table->bigInteger('nik')->unsigned()->primary();
            $table->string('nama',25);
            $table->string('tempat_lahir',25);
            $table->date('tanggal_lahir');
            $table->string('alamat',50);
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
        Schema::dropIfExists('UsersIdentities');
    }
}
