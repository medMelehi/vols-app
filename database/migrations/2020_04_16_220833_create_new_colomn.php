<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewColomn extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('firstname')->after('name');
            $table->string('lastname')->after('firstname');
            $table->string('telephone')->after('lastname');
            $table->string('nationalite')->after('telephone');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
           $table->dropColumn('firstname');
            $table->dropColumn('lastname');
            $table->dropColumn('telephone');
            $table->dropColumn('nationalite'); 
        });
    }
}
