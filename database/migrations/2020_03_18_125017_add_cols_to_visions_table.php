<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddColsToVisionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('visions', function (Blueprint $table) {
            $table->string('vision');
            $table->string('mission');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('visions', function (Blueprint $table) {
            $table->dropColumn('vision');
            $table->dropColumn('mission');
        });
    }
}
