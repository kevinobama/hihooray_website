<?php
/**
* Created by Aptana studio.
* Author: Kevin Henry Gates III at Hihooray,Inc
* Date: 2016/03/11
* Time: 15:07
* Email: zhouwensheng@hihooray.com
* migration
*/
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddTimestampsToUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('passport_users', function (Blueprint $table) {
            //
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('passport_users', function (Blueprint $table) {
            //
            $table->rememberToken();
            $table->timestamps();
        });
    }
}
