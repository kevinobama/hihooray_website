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

class CreateEduPassportUsersWeixinTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_passport_users_weixin', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->char('uid', 18)->unique('uid');
			$table->string('openid')->index('openid');
			$table->integer('expires_in')->nullable()->index('expires_in');
			$table->string('access_token')->nullable();
			$table->string('refresh_token')->nullable();
			$table->string('scope', 64)->nullable()->index('scope');
			$table->string('headimgurl')->nullable();
			$table->string('nickname', 64)->nullable();
			$table->string('sex')->nullable()->default('男')->index('sex');
			$table->string('province', 32)->nullable()->index('province');
			$table->string('city', 32)->nullable()->index('city');
			$table->string('country', 32)->nullable()->index('country');
			$table->integer('add_time')->index('add_time');
			$table->float('latitude', 10, 0)->nullable();
			$table->float('longitude', 10, 0)->nullable();
			$table->integer('location_update')->nullable()->default(0)->index('location_update');
			$table->boolean('group_id')->nullable()->default(1);
			$table->index(['latitude','longitude'], 'latitude');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_passport_users_weixin');
	}

}
