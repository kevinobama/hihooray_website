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

class CreateEduMicroCourseViewlogTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_micro_course_viewlog', function(Blueprint $table)
		{
			$table->increments('id');
			$table->char('user_id', 18)->default('')->index('user_id');
			$table->integer('mc_id')->unsigned()->default(0)->index('mc_id');
			$table->integer('mc_orderid')->unsigned()->default(0)->index('mc_orderid');
			$table->boolean('isdel')->nullable()->default(0);
			$table->dateTime('updatetime')->default('0000-00-00 00:00:00');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('edu_micro_course_viewlog');
	}

}
