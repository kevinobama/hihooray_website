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

class CreateEduTaskTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_task', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('user_id', 18)->default(0)->unique('user_id');
			$table->integer('total_scores')->unsigned()->default(0);
			$table->integer('today_scores')->unsigned()->default(0);
			$table->boolean('once_register')->default(0);
			$table->boolean('once_complete')->default(0);
			$table->boolean('everyday_checkin')->default(0);
			$table->dateTime('lastdate_checkin')->default('0000-00-00 00:00:00');
			$table->boolean('everyday_weike')->default(0);
			$table->dateTime('lastdate_weike')->default('0000-00-00 00:00:00');
			$table->boolean('everyday_share')->default(0);
			$table->dateTime('lastdate_share')->default('0000-00-00 00:00:00');
			$table->boolean('serial_checkin')->default(0);
			$table->boolean('everyday_ask')->default(0);
			$table->dateTime('lastdate_ask')->default('0000-00-00 00:00:00');
			$table->boolean('serial_ask')->default(0);
			$table->timestamp('updated_at')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->boolean('everyday_judge')->default(0);
			$table->dateTime('lastdate_judge')->default('0000-00-00 00:00:00');
			$table->boolean('everyday_buyweike')->default(0);
			$table->dateTime('lastdate_buyweike')->default('0000-00-00 00:00:00');
			$table->boolean('everyday_judgeweike')->default(0);
			$table->dateTime('lastdate_judgeweike')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_task');
	}

}
