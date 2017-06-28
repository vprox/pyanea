<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class InsertCollumnsInApplicants extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('applicants', function (Blueprint $table){
            $table->integer('aa')->after('id'); 
            $table->string('katigoria_pinaka')->after('fathername'); 
            $table->string('klados')->after('fathername');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('applicants', function (Blueprint $table){
            $table->dropColumn('aa');
            $table->dropColumn('katigoria_pinaka');
            $table->dropColumn('klados');
        });
    }
}
