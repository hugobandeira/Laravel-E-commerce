<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class TabelaFoto extends Migration
{
    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->string('foto');
        });
    }

    public function down()
    {
        Schema::table('produtos', function (Blueprint $table){
           $table->dropColumn('foto');
        });
    }
}
