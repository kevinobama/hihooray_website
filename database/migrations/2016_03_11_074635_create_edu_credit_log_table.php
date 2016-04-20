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

class CreateEduCreditLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_credit_log', function(Blueprint $table)
		{
			$table->increments('logid');
			$table->char('uid', 18)->default(0)->index('uid');
			$table->string('operation', 35)->default('')->index('operation');
			$table->integer('relatedid')->unsigned()->index('relatedid');
			$table->dateTime('dateline')->default('0000-00-00 00:00:00')->index('dateline');
			$table->integer('credits')->default(0);
			$table->integer('coin')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_credit_log');
	}

}
