<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiariesContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diaries_contents', function (Blueprint $table) {
            $table->increments('diarycontent_id');
            $table->string('diarycontent_weekday', 55);
            $table->string('diarycontent_work', 55);
            $table->string('diarycontent_content', 255);
            $table->string('diarycontent_note', 55);
            $table->string('diarycontent_teacher_comment', 255);
            $table->string('diarycontent_trainer_comment', 255);
            $table->integer('week_id');
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
        Schema::dropIfExists('diaries_contents');
    }
}
