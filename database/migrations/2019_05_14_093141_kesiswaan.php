<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Kesiswaan extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_parent');
            $table->integer('nis')->nullable();
            $table->string('name');
            $table->string('address');
            $table->date('birth_date');
            $table->string('gender');
            $table->integer('phone');
            $table->integer('tahun_masuk');
            $table->integer('religion');
                    
            
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
