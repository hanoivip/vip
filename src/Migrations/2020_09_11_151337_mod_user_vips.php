<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class ModUserVips extends Migration
{
    public function up()
    {
        Schema::table('user_vips', function (Blueprint $table) {
            $table->integer('expires')->default(0);
        });
    }

    public function down()
    {
        Schema::table('user_vips', function (Blueprint $table) {
            $table->dropColumn('expires');
        });
    }
}
