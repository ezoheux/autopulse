<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

/**
 * The role user table.
 */
class CreateRoleUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void Returns nothing.
     */
    public function up()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->bigInteger('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void Returns nothing.
     */
    public function down()
    {
        Schema::create('role_user', function (Blueprint $table) {
            $table->dropForeign('role_user_role_id_foreign');
            $table->dropForeign('role_user_user_id_foreign');
        });
    }
}
