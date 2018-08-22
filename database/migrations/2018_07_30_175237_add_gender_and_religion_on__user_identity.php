<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddGenderAndReligionOnUserIdentity extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('UsersIdentities', function (Blueprint $table) {
            $table->char('j_kelamin',1)->default('-');
            $table->string('agama',10);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('UsersIdentities', function (Blueprint $table) {
          $table->dropColumn(['j_kelamin', 'agama']);
        });
    }
}
