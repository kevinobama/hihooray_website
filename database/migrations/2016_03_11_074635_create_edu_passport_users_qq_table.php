<?php
/**
 * Created by Aptana studio.
 * Author: Kevin Henry Gates III at Hihooray,Inc
 * Date: 2016/03/11
 * Time: 15:07 
 * Email: zhouwensheng@hihooray.com
 * migration
*/
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEduPassportUsersQqTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_passport_users_qq', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->char('uid', 18)->index('uid');
			$table->string('nickname', 64)->nullable();
			$table->string('openid', 128)->nullable()->default('')->index('openid');
			$table->string('gender', 8)->nullable();
			$table->dateTime('add_time')->nullable()->index('add_time');
			$table->string('access_token', 64)->nullable()->index('access_token');
			$table->string('refresh_token', 64)->nullable();
			$table->integer('expires_time')->nullable();
			$table->string('figureurl')->nullable();
			$table->boolean('group_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_passport_users_qq');
	}

}
