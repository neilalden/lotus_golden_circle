<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMembersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('full_name');
            $table->string('nickname')->nullable();
            $table->integer('BA_number');
            $table->string('birthday')->nullable();
            $table->integer('age');
            $table->string('gender');
            $table->string('contact_number');
            $table->string('home_address')->nullable();
            $table->string('email_address');
            $table->string('direct_upline');
            $table->string('name_of_group');
            $table->string('batch_name');
            $table->string('preferred_committee');
            $table->mediumText('disabilities')->nullable();
            $table->mediumText('allergies')->nullable();
            $table->integer('absences')->nullable();
            $table->integer('warnings')->nullable();
            $table->integer('offenses')->nullable();
            $table->string('member_image')->nullable();
            $table->integer('user_id');
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
        Schema::dropIfExists('members');
    }
}
