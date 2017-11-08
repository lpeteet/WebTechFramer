<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComponentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('components', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Name')->unique;
            $table->string('Owner');
            $table->integer('comptype_id')->unsigned();
            $table->timestamps();
            $table->foreign('comptype_id')->references('id')->on('comptypes')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('components', function (Blueprint $table) {
            $table->dropForeign('components_comptype_id_foreign');
            $table->dropIfExists('components');
        });
    }
}

