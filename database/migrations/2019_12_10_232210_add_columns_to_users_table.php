<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColumnsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('first_mame')->nullable();
            $table->string('last_name')->nullable();
            $table->string('home_address')->nullable();
            $table->string('apartment')->nullable();
            $table->string('city')->nullable();
            $table->string('stat')->nullable();
            $table->string('zip_code')->nullable();
            $table->string('phone')->nullable();
            $table->string('dob')->nullable();
            $table->string('home_ownership')->nullable();
            $table->string('check_graduation')->nullable();
            $table->string('school_name')->nullable();
            $table->string('undergraduate')->nullable();
            $table->string('graduation_date')->nullable();
            $table->string('emp_status')->nullable();
            $table->string('emp_name')->nullable();
            $table->string('income_total')->nullable();
            $table->string('exp_total')->nullable();
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
            //
        });
    }
}
