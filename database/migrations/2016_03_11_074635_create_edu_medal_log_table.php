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

class CreateEduMedalLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_medal_log', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('uid', 18)->default('');
			$table->smallInteger('medalid')->unsigned()->default(0);
			$table->boolean('type')->default(0)->index('type');
			$table->dateTime('dateline')->default('0000-00-00 00:00:00')->index('dateline');
			$table->integer('expiration')->unsigned()->default(0);
			$table->boolean('status')->default(0);
			$table->index(['status','expiration'], 'status');
			$table->index(['uid','medalid','type'], 'uid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_medal_log');
	}

}
