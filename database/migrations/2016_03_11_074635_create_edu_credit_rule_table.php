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

class CreateEduCreditRuleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_credit_rule', function(Blueprint $table)
		{
			$table->increments('rid');
			$table->string('rulename', 30)->default('');
			$table->string('action', 30)->default('')->unique('action');
			$table->boolean('cycletype')->default(0);
			$table->integer('cycletime')->default(0);
			$table->boolean('rewardnum')->default(0);
			$table->integer('coin')->default(0);
			$table->integer('credits')->default(0);
			$table->boolean('group_id')->default(0);
			$table->float('rates', 10, 0)->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_credit_rule');
	}

}
