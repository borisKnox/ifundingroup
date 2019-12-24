<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddRoleToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->enum('role', ['admin', 'author', 'user'])->default('user');
            $table->text('bio')->nullable();
            $table->string('avatar')->nullable();
            $table->string('mobile')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
                $table->dropColumn('role', ['admin', 'author', 'user'])->default('user');
                $table->dropColumn('bio')->nullable();
                $table->dropColumn('avatar')->nullable();
                $table->dropColumn('mobile')->nullable();
        });
    }
}
