<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class WordCard extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('word_card', function (Blueprint $table) {
            $table->increments('id',true);
            $table->unsignedInteger('card_id')->nullable();
            $table->unsignedInteger('word_id')->nullable();
        });

        Schema::table('word_card', function (Blueprint $table) {
            $table->foreign('card_id')->references('id')->on('card');
            $table->foreign('word_id')->references('id')->on('word');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // Schema::table('word_card', function (Blueprint $table) {
        //     $table->dropForeign('word_card_id_foreign');
        //     $table->dropColumn('card_id');
        //     $table->dropColumn('word_id');
        // });

        Schema::dropIfExists('word_card');
    }
}
