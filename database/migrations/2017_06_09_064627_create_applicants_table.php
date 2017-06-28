<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->increments('id');
            $table->string('afm');
            $table->string('at');
            $table->string('surname',30);
            $table->string('name',30);
            $table->string('fathername',15)->nullable();
            $table->enum('aathinas',['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'])->default(0);
            $table->enum('bathinas',['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'])->default(0);
            $table->enum('cathinas',['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'])->default(0);
            $table->enum('dathinas',['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'])->default(0);
            $table->enum('anatolikiattiki',['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'])->default(0);
            $table->enum('ditikiattiki',['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'])->default(0);
            $table->enum('peiraias',['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'])->default(0);
            $table->enum('keddyaathinas',['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'])->default(0);
            $table->enum('keddybathinas',['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'])->default(0);
            $table->enum('keddycathinas',['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'])->default(0);
            $table->enum('keddydathinas',['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'])->default(0);
            $table->enum('keddyanatolikiattiki',['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'])->default(0);
            $table->enum('keddyditikiattiki',['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'])->default(0);
            $table->enum('keddypeiraias',['0','1','2','3','4','5','6','7','8','9','10','11','12','13','14'])->default(0);
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
        Schema::dropIfExists('applicants');
    }
}
