<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNavigationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::dropIfExists('navigations');
        Schema::create('navigations', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('page_id');/*>foreign('page_id')->references('id')->on('pages')->onDelete('cascade');*/
            /*$table->dropColumn('page_id');*/
            $table->string('name');
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
        Schema::dropIfExists('navigations');
    }
}
