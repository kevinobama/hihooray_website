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

class CreateEduMicroclassLogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_microclass_log', function(Blueprint $table)
		{
			$table->increments('micro_log_id');
			$table->char('user_id', 18)->default('')->index('user_id');
			$table->integer('micro_id')->unsigned()->default(0)->index('micro_id');
			$table->dateTime('expire')->default('0000-00-00 00:00:00');
			$table->dateTime('buytime')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_microclass_log');
	}

}
