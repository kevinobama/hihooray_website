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

class CreateEduCreditRuleLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_credit_rule_log', function(Blueprint $table)
		{
			$table->increments('clid');
			$table->string('uid', 18)->default('0');
			$table->integer('rid')->unsigned()->default(0);
			$table->integer('fid')->unsigned()->default(0);
			$table->integer('total')->unsigned()->default(0);
			$table->integer('cyclenum')->unsigned()->default(0);
			$table->integer('credits')->default(0);
			$table->integer('coin')->default(0);
			$table->dateTime('starttime')->default('0000-00-00 00:00:00');
			$table->dateTime('dateline')->default('0000-00-00 00:00:00')->index('dateline');
			$table->index(['uid','rid','fid'], 'uid');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_credit_rule_log');
	}

}
