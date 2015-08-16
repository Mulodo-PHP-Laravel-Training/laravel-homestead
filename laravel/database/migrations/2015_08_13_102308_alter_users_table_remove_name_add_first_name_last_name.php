<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterUsersTableRemoveNameAddFirstNameLastName extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function($table){
            $table->dropColumn('name'); // delete default field named "name"
            $table->string('first_name', 50)->after('id'); // add new field
            $table->string('last_name', 50)->after('first_name'); // add new field
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function($table){
            $table->dropColumn('last_name'); // remove new field
            $table->dropColumn('first_name'); // remove new field
            $table->string('name')->after('id'); // reverse default field for user table (default table)
        });
    }
}
