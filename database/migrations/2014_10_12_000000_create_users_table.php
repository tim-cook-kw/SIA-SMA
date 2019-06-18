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
            // $table->bigIncrements('id');
            // $table->string('email')->unique();
            // $table->timestamp('email_verified_at')->nullable();
            // $table->string('password');
            // $table->unsignedBigInteger('role_id')->index()->nullable();
            // $table->rememberToken();
            // $table->timestamps();
            $table->bigIncrements('id');
            $table->integer('id_parent');
            $table->integer('id_class');
            $table->unsignedBigInteger('role_id')->index()->nullable();
            $table->integer('nis')->nullable();
            $table->integer('nip')->nullable();
            $table->string('position')->nullable();
            $table->integer('tahun_masuk')->nullable();
            $table->string('origin_of_school')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('name'); 
            $table->string('address'); 
            $table->string('birth_date'); 
            $table->string('gender'); 
            $table->integer('phone'); 
            $table->integer('religion'); 
            $table->string('image');
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
