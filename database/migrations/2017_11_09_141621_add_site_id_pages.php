<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSiteIdPages extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('pages', function($table) {
            $table->integer('site_id')->unsigned();
            $table->foreign('site_id')->references('id')->on('sites')
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
        //
        Schema::table('pages', function($table) {
            $table->dropForeign('pages_site_id_foreign');
            $table->dropColumn('site_id');
        });
    }
}
