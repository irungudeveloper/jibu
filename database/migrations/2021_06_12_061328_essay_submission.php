<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EssaySubmission extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('submission', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
             $table->string('description');
            $table->integer('hours');
            $table->string('paper');
            $table->integer('pages');
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
         Schema::dropIfExists('submission');
    }
}
