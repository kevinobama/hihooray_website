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

class CreateEduMicroCourseOrderTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('edu_micro_course_order', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('order_id', 60)->index('mcorder_id');
			$table->char('user_id', 18)->default('')->index('user_id');
			$table->string('username', 15)->default('');
			$table->integer('mc_id')->unsigned()->default(0)->index('mc_id');
			$table->string('mc_name', 100)->default('');
			$table->char('t_user_id', 18)->nullable()->default('');
			$table->integer('stage_id')->nullable()->default(0);
			$table->integer('grade_id')->nullable()->default(0);
			$table->string('grade_name', 20)->nullable()->default('');
			$table->integer('course_id')->nullable()->default(0);
			$table->string('course_name', 20)->nullable()->default('');
			$table->smallInteger('price')->unsigned()->default(0);
			$table->string('video_small_image')->default('');
			$table->string('video_middle_image')->default('');
			$table->string('video_big_image')->default('');
			$table->integer('view_nums')->nullable()->default(0);
			$table->integer('valid_time')->default(0);
			$table->boolean('isshow')->nullable()->default(1);
			$table->boolean('isdel')->nullable()->default(0);
			$table->dateTime('createtime')->default('0000-00-00 00:00:00');
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
		Schema::drop('edu_micro_course_order');
	}

}
