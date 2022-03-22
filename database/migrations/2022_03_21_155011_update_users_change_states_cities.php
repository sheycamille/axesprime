<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateUsersChangeStatesCities extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('town_id');
            $table->dropColumn('state_id');
            $table->text('town')->after('address')->nullable();
            $table->text('state')->after('town')->nullable();
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
            $table->dropColumn('town');
            $table->dropColumn('state');
            $table->text('town_id')->after('address')->nullable();
            $table->text('state_id')->after('town_id')->nullable();
        });
    }
}
