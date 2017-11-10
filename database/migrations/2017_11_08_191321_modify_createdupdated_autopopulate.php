<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModifyCreatedupdatedAutopopulate extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        // Schema::table('components', function($table) {
        //     $table->integer('created_at');
        // });        
		DB::query("ALTER TABLE `framer`.`components` CHANGE COLUMN `created_at` `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP;");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //No Rollback for this

    }
}
