<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColsToLandingpgsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('landingpgs', function (Blueprint $table) {
            $table->string('text');
            $table->string('picture');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('landingpgs', function (Blueprint $table) {
            $table->dropColumn('text');
            $table->dropColumn('picture');
        });
    }
}
